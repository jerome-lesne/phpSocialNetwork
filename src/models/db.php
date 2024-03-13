<?php

class Db
{
    private static $instance;
    /**
     * @param mixed $servername
     * @param mixed $username
     * @param mixed $password
     */
    public static function setInstance($servername, $username, $password): PDO
    {
        try {
            self::$instance = new PDO("mysql:host=$servername;; dbname=db", $username, $password);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<p id='dbConnect'>db connection OK</p>";
            return self::$instance;
        } catch (PDOException $e) {
            echo "Error : " . $e -> getMessage();
            return self::$instance;
        }
    }
}
