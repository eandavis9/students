<?php

namespace App\FacadeTest;
use Illuminate\Support\Facades\Facade;


class AnotherFacade extends Facade{

    protected static function getFacadeAccessor(){

        return 'test_facade';
    }

    public static function get(){

        return 'facade test';
    }
}


?>