<?php

namespace Users;

interface User {

   /* public function __construct($name, $email, $role)
    {
        $this->userName = $name;
        $this->email = $email;
        $this->role = $role;
    }*/

    public function getUserData();

    public function addDescription($description='belenkas');
}