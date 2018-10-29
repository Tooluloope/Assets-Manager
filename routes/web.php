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




Route::get('/users', 'UserController@index')->name('users');
Route::post('/users', 'UserController@create')->name('create-user');
Route::get('/equipment', 'EquipmentController@index')->name('equipments');

Auth::routes();

Route::get('/test', function ()
{
	return view ('test');
});
Route::get('/edit-consumables', function ()
{   
	return view ('consumables/edit-consumables');
});
Route::get('/add-consumables', function ()
{
	return view ('consumables/add-consumables');
});
Route::get('/edit-equipment', function ()
{   
	return view ('equipment/edit-equipment');
});
Route::get('/add-equipment', function ()
{
	return view ('equipment/add-equipment');
});
Route::get('/equipment-list', function ()
{
	return view ('equipment/list-equipment');
});



Route::get('/', function () {
    return view('home');
});
Route::post('/walk', 'HomeController@walk');