<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//dd(TestingFacade::get());
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/{any}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+)?');


/*Route::get('/admin/', function () {
    if (Auth::check()) {
        return view('admin');
    }
    return redirect('/login');

});*/

Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@create');

Route::get('/get_students', 'StudentController@index')->name('get_students');
Route::get('/get_students/{id}', 'StudentController@show');
Route::post('/get_students', 'StudentController@create')->name('add_student');
Route::delete('/get_students/{id}', 'StudentController@destroy')->name('delete_student');
Route::put('/get_students', 'StudentController@create')->name('update_student');

Route::get('/get_grades', 'GradeController@index')->name('get_grades');
Route::post('/get_grades', 'GradeController@create')->name('add_grade');
Route::delete('/get_grades/{id}', 'GradeController@destroy')->name('delete_grade');
Route::put('/get_grades', 'GradeController@create')->name('update_grade');


Route::post('/sections', 'SectionController@store')->name('add_section');
Route::get('/get_sections', 'SectionController@index')->name('get_section');


Route::post('/student_data', 'StudentDataController@store')->name('add_data');

Route::delete('/student_data/{id}', 'StudentDataController@destroy')->name('delete_data');
Route::put('/student_data/{id}', 'StudentDataController@update')->name('update_data');



//Route::get('/profile', 'UserController@index');
//Route::put('/profile', 'UserController@update');
