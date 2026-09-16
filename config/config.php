<?php

declare(strict_types=1);

$envFile = dirname(__DIR__) . '/.env';
if (is_file($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        }
        [$key, $value] = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($value, " \t\n\r\0\x0B\"");
    }
}

return [
    'name' => $_ENV['APP_NAME'] ?? 'BRDigital',
    'url' => rtrim($_ENV['APP_URL'] ?? 'http://localhost:8000', '/'),
    'env' => $_ENV['APP_ENV'] ?? 'production',
    'db' => [
        'host' => $_ENV['DB_HOST'] ?? '127.0.0.1',
        'port' => $_ENV['DB_PORT'] ?? '3306',
        'name' => $_ENV['DB_NAME'] ?? 'brdigital',
        'user' => $_ENV['DB_USER'] ?? 'brdigital',
        'pass' => $_ENV['DB_PASS'] ?? '',
    ],
];
