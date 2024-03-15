<?php

abstract class UserRipository extends Db
{
    private static function request($request)
    {
        $result = self::getInstance()->query($request);
        return $result;
    }
    public static function insertIntoDb($user)
    {
        return self::request("INSERT INTO users(firstname, name, mail, password) VALUES('". $user->getFirstName() ."', '". $user->getName() ."', '". $user->getMail() ."', '". $user->getPassword() ."')");
    }

    public static function getUserByMail($mail)
    {
        return self::request("SELECT * FROM users WHERE mail = '$mail'")->fetch(PDO::FETCH_ASSOC);
    }

    public static function getUserById($id)
    {
        return self::request("SELECT * FROM users WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
    }
}
