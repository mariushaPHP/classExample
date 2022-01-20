<?php 

namespace Users;

class Student implements User{
    private $subject;
    protected $userName;  // Atributai arba ipatybes
    protected $email;
    protected $role;
    protected $description;


    public function __construct($userName, $email, $role)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->role = $role;
    }

    public function addDescription($description = 'Belenlkas')
    {
        $this->description = $description;
    }

    public function addSubject($subject){
        $this->subject = $subject;
    }

    public function getUserData(){
        return [
            $this->userName,
            $this->email,
            $this->role,
            $this->description,
            $this->subject
        ];
    }
}