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
Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);
Route::get('users', ['as' => 'users', function () {
    return view('users');
}]);
Route::get('personnel', ['as' => 'personnel', function () {
    return view('personnel');
}]);
Route::get('projects', ['as' => 'projects', function () {
    return view('projects');
}]);

