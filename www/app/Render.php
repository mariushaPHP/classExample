<?php

namespace Users;

class Render{
    static public function showAll($data){
        foreach($data as $value){
            echo "<li>$value</li>";
        }
    }
}