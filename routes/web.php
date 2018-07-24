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
Route::post('/users', 'UserController@create')->name('create-user');
Route::get('/personnel', 'PersonnelController@index')->name('all-personnel');
Route::post('/personnel', 'PersonnelController@create')->name('create-personnel');


Route::get('/projects', 'ProjectController@index')->name('projects');
Route::post('/project', 'ProjectController@create')->name('project');
Route::any('/projects/{name}/add-personnel', 'ProjectController@add_personnel')->name('add-personnel');
Route::any('/projects/{name}/remove-personnel', 'ProjectController@remove_personnel')->name('remove-personnel');
Route::get('/projects/{name}/personnel', 'ProjectController@view_personnel')->name('view-personnel');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/walk', 'HomeController@walk');