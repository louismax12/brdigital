<?php

function e($value)
{
    return htmlspecialchars($value !== null ? (string)$value : '', ENT_QUOTES, 'UTF-8');
}

function asset($path)
{
    $cleanPath = ltrim($path, '/');
    $scriptName = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
    $dirName = str_replace('\\', '/', dirname($scriptName));
    
    // Jika di VPS (DocumentRoot langsung ke public/ atau root domain)
    if ($dirName === '/' || $dirName === '.' || $dirName === '/public') {
        return '/' . $cleanPath;
    }
    
    // Jika di lokal XAMPP subfolder (misal /brdigital/new/brdigital)
    if (strpos($dirName, '/public') !== false) {
        return $dirName . '/' . $cleanPath;
    }
    
    return $dirName . '/public/' . $cleanPath;
}

function url($path)
{
    $cleanPath = ltrim($path, '/');
    $scriptName = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
    $dirName = str_replace('\\', '/', dirname($scriptName));
    
    // VPS or Root DocumentRoot
    if ($dirName === '/' || $dirName === '.' || $dirName === '/public') {
        return '/' . $cleanPath;
    }
    
    // XAMPP subfolder (strip /public if present)
    $base = str_replace('/public', '', $dirName);
    return rtrim($base, '/') . '/' . $cleanPath;
}

function redirect($path)
{
    // Cek apakah absolute path atau URL lengkap
    if (strpos($path, 'http') === 0) {
        header('Location: ' . $path);
    } else {
        header('Location: ' . url($path));
    }
    exit;
}

function csrf_token()
{
    if (empty($_SESSION['csrf'])) {
        if (function_exists('random_bytes')) {
            $_SESSION['csrf'] = bin2hex(random_bytes(32));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $_SESSION['csrf'] = bin2hex(openssl_random_pseudo_bytes(32));
        } else {
            $_SESSION['csrf'] = md5(uniqid((string)rand(), true));
        }
    }
    return $_SESSION['csrf'];
}

function verify_csrf()
{
    $sessionCsrf = isset($_SESSION['csrf']) ? $_SESSION['csrf'] : '';
    $postToken = isset($_POST['_token']) ? $_POST['_token'] : '';
    if (function_exists('hash_equals')) {
        $valid = hash_equals($sessionCsrf, $postToken);
    } else {
        $valid = ($sessionCsrf === $postToken);
    }
    if (!$valid) {
        http_response_code(419);
        exit('Sesi formulir kedaluwarsa. Silakan kembali dan coba lagi.');
    }
}

function flash($key, $value = null)
{
    if ($value !== null) {
        $_SESSION['_flash'][$key] = (string)$value;
        return null;
    }
    $message = isset($_SESSION['_flash'][$key]) ? $_SESSION['_flash'][$key] : null;
    unset($_SESSION['_flash'][$key]);
    return $message;
}

function render($view, array $data = array())
{
    extract($data);
    require dirname(__DIR__) . '/app/views/' . $view . '.php';
}
