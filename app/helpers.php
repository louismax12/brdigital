<?php

declare(strict_types=1);

function e($value): string
{
    return htmlspecialchars($value !== null ? (string)$value : '', ENT_QUOTES, 'UTF-8');
}

function redirect(string $path): void
{
    header('Location: ' . $path);
    exit;
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf'];
}

function verify_csrf(): void
{
    $sessionCsrf = isset($_SESSION['csrf']) ? $_SESSION['csrf'] : '';
    $postToken = isset($_POST['_token']) ? $_POST['_token'] : '';
    if (!hash_equals($sessionCsrf, $postToken)) {
        http_response_code(419);
        exit('Sesi formulir kedaluwarsa. Silakan kembali dan coba lagi.');
    }
}

function flash(string $key, $value = null)
{
    if ($value !== null) {
        $_SESSION['_flash'][$key] = (string)$value;
        return null;
    }
    $message = isset($_SESSION['_flash'][$key]) ? $_SESSION['_flash'][$key] : null;
    unset($_SESSION['_flash'][$key]);
    return $message;
}

function render(string $view, array $data = []): void
{
    extract($data);
    require dirname(__DIR__) . '/app/views/' . $view . '.php';
}
