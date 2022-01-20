<?php 

namespace Users;

class Student extends User{
    private $subject;

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