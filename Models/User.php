<?php
class User
{
    public $id;
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public $authority;
    public $email; 
    public $active;

    function __construct($id, $username, $password, $firstname, $lastname, $authority, $email, $active) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        if ($authority == 1)  $this->authority = "administrator";
        else $this->authority = "user";
        $this->authority = $authority;
        $this->email = $email;
        $this->active = $active;
    }
}