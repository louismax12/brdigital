<?php

class Database
{
    private static $connection = null;

    public static function connect(array $config)
    {
        if (self::$connection instanceof PDO) {
            return self::$connection;
        }

        $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', $config['host'], $config['port'], $config['name']);
        self::$connection = new PDO($dsn, $config['user'], $config['pass'], array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ));

        return self::$connection;
    }
}
