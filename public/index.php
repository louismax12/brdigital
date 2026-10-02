<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "<!-- DEBUG PHP ENGINE START -->";

session_start();
$config = require dirname(__DIR__) . '/config/config.php';
require dirname(__DIR__) . '/app/helpers.php';
require dirname(__DIR__) . '/app/Database.php';

$requestUri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$path = parse_url($requestUri, PHP_URL_PATH);
if (!$path) {
    $path = '/';
}

// Clean subfolder prefix from path for local Apache / XAMPP environments
$scriptName = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
$dirName = str_replace('\\', '/', dirname($scriptName));
$baseDir = str_replace('/public', '', $dirName);

if ($baseDir !== '/' && $baseDir !== '') {
    if (strpos($path, $baseDir) === 0) {
        $path = substr($path, strlen($baseDir));
    }
}

// Remove trailing /public if present in path (just in case they accessed it directly)
if (strpos($path, '/public') === 0) {
    $path = substr($path, 7);
}

$path = '/' . ltrim($path, '/');

$method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
$db = null;
$dbError = null;

try {
    $db = Database::connect($config['db']);
} catch (Exception $exception) {
    $dbError = $exception;
}

function requireLogin()
{
    if (empty($_SESSION['user'])) {
        redirect('/login');
    }
}

if ($path === '/' && $method === 'GET') {
    render('home');
    exit;
}

if ($path === '/contact' && $method === 'GET') {
    render('contact');
    exit;
}

if ($path === '/konsultasi' && $method === 'POST') {
    verify_csrf();
    $_SESSION['old'] = $_POST;
    $required = array('contact_name', 'business_name', 'whatsapp', 'message');
    foreach ($required as $field) {
        $val = isset($_POST[$field]) ? trim($_POST[$field]) : '';
        if ($val === '') {
            flash('error', 'Mohon lengkapi semua field yang wajib diisi.');
            redirect('/contact');
        }
    }
    if (!$db) {
        flash('error', 'Database belum terhubung. Silakan periksa koneksi VPS.');
        redirect('/contact');
    }
    $statement = $db->prepare("INSERT INTO leads (business_name, contact_name, whatsapp, email, service_type, message, status, source, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, 'New', 'website', NOW(), NOW())");
    $emailVal = isset($_POST['email']) ? trim($_POST['email']) : '';
    $serviceVal = isset($_POST['service_type']) ? trim($_POST['service_type']) : '';
    $statement->execute(array(
        trim($_POST['business_name']),
        trim($_POST['contact_name']),
        trim($_POST['whatsapp']),
        $emailVal,
        $serviceVal,
        trim($_POST['message'])
    ));
    unset($_SESSION['old']);
    flash('success', 'Terima kasih. Konsultasi Anda sudah kami terima.');
    redirect('/contact');
}

if ($path === '/login' && $method === 'GET') {
    render('login');
    exit;
}

if ($path === '/login' && $method === 'POST') {
    verify_csrf();
    if (!$db) {
        flash('error', 'Database belum terhubung.');
        redirect('/login');
    }
    $input = '';
    if (isset($_POST['email']) && trim($_POST['email']) !== '') {
        $input = trim($_POST['email']);
    } elseif (isset($_POST['username']) && trim($_POST['username']) !== '') {
        $input = trim($_POST['username']);
    }
    $statement = $db->prepare('SELECT id, name, email, username, password_hash, role FROM users WHERE email = ? OR username = ? LIMIT 1');
    $statement->execute(array($input, $input));
    $user = $statement->fetch();
    $passInput = isset($_POST['password']) ? $_POST['password'] : '';
    if (!$user || !password_verify($passInput, $user['password_hash'])) {
        flash('error', 'Username/Email atau password tidak sesuai.');
        redirect('/login');
    }
    session_regenerate_id(true);
    unset($user['password_hash']);
    $_SESSION['user'] = $user;
    redirect('/admin');
}

if ($path === '/logout') {
    $_SESSION = array();
    session_destroy();
    redirect('/');
}

if ($path === '/admin' && $method === 'GET') {
    requireLogin();
    $stats = array('leads' => 0, 'new_leads' => 0, 'projects' => 0);
    $recentLeads = array();
    if ($db) {
        $stats['leads'] = (int)$db->query('SELECT COUNT(*) FROM leads')->fetchColumn();
        $stats['new_leads'] = (int)$db->query("SELECT COUNT(*) FROM leads WHERE status = 'New'")->fetchColumn();
        $stats['projects'] = (int)$db->query("SELECT COUNT(*) FROM projects WHERE status NOT IN ('Completed', 'Cancelled')")->fetchColumn();
        $recentLeads = $db->query('SELECT business_name, contact_name, service_type, status FROM leads ORDER BY created_at DESC LIMIT 8')->fetchAll();
    }
    render('dashboard', array('user' => $_SESSION['user'], 'stats' => $stats, 'recentLeads' => $recentLeads));
    exit;
}

if ($path === '/admin/leads' && $method === 'GET') {
    requireLogin();
    $leads = $db ? $db->query('SELECT id, business_name, contact_name, whatsapp, email, service_type, message, status, source, created_at FROM leads ORDER BY created_at DESC')->fetchAll() : array();
    render('leads', array('leads' => $leads));
    exit;
}

http_response_code(404);
echo '<h1>Halaman tidak ditemukan</h1><p>Path yang terbaca: ' . htmlspecialchars($path) . '</p>';
