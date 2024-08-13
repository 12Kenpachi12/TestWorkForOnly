<?php

namespace Kenpachi\TestWork\Component;

class Database
{
    public static $pdo = null;

    public static function getInstance()
    {
        if (static::$pdo === null) {
            $host = 'mysql';
            $db   = 'work';
            $user = 'root';
            $pass = 'root';
            $charset = 'utf8';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            static::$pdo = new \PDO($dsn, $user, $pass, $opt); 
        }

        return static::$pdo;
    }
}