<?php

declare(strict_types=1);

session_start();
$config = require dirname(__DIR__) . '/config/config.php';
require dirname(__DIR__) . '/app/helpers.php';
require dirname(__DIR__) . '/app/Database.php';

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$db = null;
$dbError = null;

try {
    $db = Database::connect($config['db']);
} catch (Throwable $exception) {
    $dbError = $exception;
}

$requireLogin = static function (): void {
    if (empty($_SESSION['user'])) {
        redirect('/login');
    }
};

if ($path === '/' && $method === 'GET') {
    render('home');
    exit;
}

if ($path === '/kontak' && $method === 'GET') {
    render('contact');
    exit;
}

if ($path === '/konsultasi' && $method === 'POST') {
    verify_csrf();
    $_SESSION['old'] = $_POST;
    $required = ['contact_name', 'business_name', 'whatsapp', 'message'];
    foreach ($required as $field) {
        if (trim($_POST[$field] ?? '') === '') {
            flash('error', 'Mohon lengkapi semua field yang wajib diisi.');
            redirect('/kontak');
        }
    }
    if (!$db) {
        flash('error', 'Database belum terhubung. Jalankan instalasi database terlebih dahulu.');
        redirect('/kontak');
    }
    $statement = $db->prepare('INSERT INTO leads (business_name, contact_name, whatsapp, email, service_type, message, status, source, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, \'New\', \'website\', NOW(), NOW())');
    $statement->execute([trim($_POST['business_name']), trim($_POST['contact_name']), trim($_POST['whatsapp']), trim($_POST['email'] ?? ''), trim($_POST['service_type'] ?? ''), trim($_POST['message'])]);
    unset($_SESSION['old']);
    flash('success', 'Terima kasih. Konsultasi Anda sudah kami terima.');
    redirect('/kontak');
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
    $input = trim($_POST['email'] ?? $_POST['username'] ?? '');
    $statement = $db->prepare('SELECT id, name, email, username, password_hash, role FROM users WHERE email = ? OR username = ? LIMIT 1');
    $statement->execute([$input, $input]);
    $user = $statement->fetch();
    if (!$user || !password_verify($_POST['password'] ?? '', $user['password_hash'])) {
        flash('error', 'Username/Email atau password tidak sesuai.');
        redirect('/login');
    }
    session_regenerate_id(true);
    unset($user['password_hash']);
    $_SESSION['user'] = $user;
    redirect('/admin');
}

if ($path === '/logout') {
    $_SESSION = [];
    session_destroy();
    redirect('/');
}

if ($path === '/admin' && $method === 'GET') {
    $requireLogin();
    $stats = ['leads' => 0, 'new_leads' => 0, 'projects' => 0];
    $recentLeads = [];
    if ($db) {
        $stats['leads'] = (int)$db->query('SELECT COUNT(*) FROM leads')->fetchColumn();
        $stats['new_leads'] = (int)$db->query("SELECT COUNT(*) FROM leads WHERE status = 'New'")->fetchColumn();
        $stats['projects'] = (int)$db->query("SELECT COUNT(*) FROM projects WHERE status NOT IN ('Completed', 'Cancelled')")->fetchColumn();
        $recentLeads = $db->query('SELECT business_name, contact_name, service_type, status FROM leads ORDER BY created_at DESC LIMIT 8')->fetchAll();
    }
    render('dashboard', ['user' => $_SESSION['user'], 'stats' => $stats, 'recentLeads' => $recentLeads]);
    exit;
}

if ($path === '/admin/leads' && $method === 'GET') {
    $requireLogin();
    $leads = $db ? $db->query('SELECT id, business_name, contact_name, whatsapp, email, service_type, message, status, source, created_at FROM leads ORDER BY created_at DESC')->fetchAll() : [];
    render('leads', ['leads' => $leads]);
    exit;
}

http_response_code(404);
echo 'Halaman tidak ditemukan.';
