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

Route::get('sign-in', function () {
    return view('auth.signin');
});


Route::get('/users', 'UserController@index')->name('users');
Route::get('/personnel', 'PersonnelController@index')->name('personnels');

Route::get('projects', ['as' => 'projects', function () {
    return view('projects');
}]);


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/walk', 'HomeController@walk');