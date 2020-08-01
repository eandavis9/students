<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('test', function(){

            return new \App\TestFacade;
            //return 'this is a test';
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
