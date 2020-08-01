<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\FacadeTest\AnotherFacade;

class TestingProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('test_facade', function(){

            return new AnotherFacade;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
