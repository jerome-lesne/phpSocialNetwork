<?php

class Db
{
    private static $instance = null;
    /**
     * @param mixed $servername
     * @param mixed $username
     * @param mixed $password
     */
    public static function getInstance(): PDO
    {
        if(self::$instance === null) {
            try {
                self::$instance = new PDO("mysql:host=db:3306; dbname=db", "db", "db");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e -> getMessage());
            }
        }
        return self::$instance;
    }

    public static function disconnect(): void
    {
        self::$instance = null;
    }
}
