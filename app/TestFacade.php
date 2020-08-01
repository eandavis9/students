<?php

namespace App;

use Illuminate\Support\Facades\Facade;
use App\TestClass;
use App\User;

class TestFacade extends Facade{

    public static function testing(){

        return new TestClass(User::getAll());
        //return 'tis is a test';
    }

    protected static function getFacadeAccessor(){

        return 'test';
    }
}


?>