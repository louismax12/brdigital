<?php

$envFile = dirname(__DIR__) . '/.env';
if (is_file($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0 || strpos($line, '=') === false) {
            continue;
        }
        $parts = explode('=', $line, 2);
        $_ENV[trim($parts[0])] = trim($parts[1], " \t\n\r\0\x0B\"");
    }
}

return array(
    'name' => isset($_ENV['APP_NAME']) ? $_ENV['APP_NAME'] : 'BRDigital',
    'url' => rtrim(isset($_ENV['APP_URL']) ? $_ENV['APP_URL'] : 'http://localhost/brdigital', '/'),
    'env' => isset($_ENV['APP_ENV']) ? $_ENV['APP_ENV'] : 'production',
    'contact' => array(
        'emails' => array('brdigital.click@brdigital.click', 'bumantararaileten@gmail.com'),
        'whatsapp' => '087 47620245',
        'whatsapp_clean' => '628747620245',
        'starting_price' => 'Rp 50.000',
    ),
    'db' => array(
        'host' => isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : '103.89.0.99',
        'port' => isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : '3306',
        'name' => isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : 'brdigital_db',
        'user' => isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : 'root',
        'pass' => isset($_ENV['DB_PASS']) ? $_ENV['DB_PASS'] : '123456789',
    ),
);
