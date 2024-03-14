<?php

class User extends UserRipository
{
    private $firstName;
    private $name;
    private $mail;
    private $password;
    /**
     * @param mixed $firstName
     * @param mixed $name
     * @param mixed $mail
     * @param mixed $password
     */
    public function __construct($firstName, $name, $mail, $password)
    {
        $this->firstName = $firstName;
        $this->name = $name;
        $this->mail = $mail;
        $this->password = $password;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
