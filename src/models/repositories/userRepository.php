<?php

abstract class UserRipository extends Db
{
    private static function request($request)
    {
        $result = self::getInstance()->query($request);
        // self::disconnect();
        return $result;
    }
    public static function insertIntoDb($user)
    {
        return self::request("INSERT INTO users(firstname, name, mail, password) VALUES('". $user->getFirstName() ."', '". $user->getName() ."', '". $user->getMail() ."', '". $user->getPassword() ."')");
    }
}
