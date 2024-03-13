<?php

class User
{
    private $firstName;
    private $name;
    private $mail;
    private $password;

    public function __construct($firstName, $name, $mail, $password)
    {
        $this->firstName = $firstName;
        $this->name = $name;
        $this->mail = $mail;
        $this->password = $password;
    }

    public function insertIntoDb($db)
    {
        $sql = $db -> prepare(
            "INSERT INTO user(firstname, ,name, mail, password)
            VALUES (:firstName, :familyName, :mail, :pass)"
        );
        $sql->bindParam(':firstName', $this->firstName);
        $sql->bindParam(':familyName', $this->name);
        $sql->bindParam(':mail', $this->mail);
        $sql->bindParam(':pass', $this->password);
        $sql -> execute();
    }
}
