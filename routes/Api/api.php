<?php

use Illuminate\Http\Request;


Route::prefix('/user')->group(function(){

    Route::post('/login', 'Api\LoginController@login');
    Route::middleware('auth:api')->get('/all', 'Api\user\UserController@index');

});

?>