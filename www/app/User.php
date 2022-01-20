<?php

namespace Users;

class User {
    protected $userName;  // Atributai arba ipatybes
    protected $email;
    protected $role;
    protected $description;

    public function __construct($name, $email, $role)
    {
        $this->userName = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function getUserData(){
        return [
            $this->userName,
            $this->email,
            $this->role,
            $this->description
        ];
    }

    public function addDescription($description){
        $this->description = $description;
    }
    public function __toString() // Magic method
    {
        return $this->userName;
    }
}