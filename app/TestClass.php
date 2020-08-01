<?php

namespace App;

class TestClass{


    protected $name;

    public function __construct($users){

        return $this->users = $users;
    }

    public static function another(){


        return 'dependecy';
    }
}