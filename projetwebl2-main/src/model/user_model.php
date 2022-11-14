<?php

class User
{
    private $id;
    private $username;
    private $pwd;
    private $first_name;
    private $last_name;
    private $mail;

    public function __construct(
    string $id, 
    ?string $username,
    ?string $pwd,
    ?string $first_name,
    ?string $last_name,
    ?string $mail)
    {
        $this->id = $id;
        $this->username = $username;
        $this->pwd = $pwd;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->mail = $mail;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        if($this->username == null)
        {
            return "";
        }
        return $this->username;
    }

    public function getPwd(): string
    {
        if($this->pwd == null)
        {
            return "";
        }
        return $this->pwd;
    }
    
    public function getFirstName(): string
    {
        if($this->first_name == null)
        {
            return "";
        }
        return $this->first_name;
    }

    public function getLastName(): string
    {   
        if($this->last_name == null)
        {
            return "";
        }
        return $this->last_name;
    }

    public function getMail(): string
    {
        if($this->mail == null)
        {
            return "";
        }
        return $this->mail;
    }



    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }  

}

