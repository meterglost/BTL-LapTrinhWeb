<?php

class Database
{
    private static $instance = NULL;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=127.0.0.1;port=5432;dbname=" . getenv('MYSQL_DATABASE'),
                    getenv('MYSQL_USER'),
                    getenv('MYSQL_PASSWORD'),
                );
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        return self::$instance;
    }
}
