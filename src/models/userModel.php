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
        $this->setMail($mail);
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
    public function setMail($eMail)
    {
        $mailRegex = '/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\.\-]+\.[a-zA-Z0-9_\.\-]{2,255}/';
        if(!preg_match($mailRegex, $eMail)) {
            throw new Exception("Error Wrong Syntax on Email", 10); // code 10 will be to check if its an email error
        } else {
            $this->mail = $eMail;
        }
    }

}
