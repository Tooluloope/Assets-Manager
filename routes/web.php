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
Route::get('/equipments', 'EquipmentController@index')->name('equipments');
Route::get('/add-equipment', 'EquipmentController@add_equipment')->name('add-equipment');

Route::get('/projects', 'ProjectController@index')->name('projects');
Route::post('/project', 'ProjectController@create')->name('project');
Route::post('/project/update', 'ProjectController@update')->name('update-project');
Route::any('/projects/{name}/allocate-equipment', 'ProjectController@add_equipment')->name('allocate-equipment');
Route::any('/projects/{name}/deallocate -equipment', 'ProjectController@remove_equipment')->name('deallocate -equipment');
Route::get('/projects/{name}/equipment', 'ProjectController@view_equipment')->name('view-equipment');
Auth::routes();


Route::get('/consumables', 'ConsumableController@index')->name('consumables');
Route::post('/consumables/add', 'ConsumableController@create')->name('add-consumables');

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
<<<<<<< HEAD
Route::get('/equipment-name', function ()
{   
	return view ('equipment/equipment');
});
Route::get('/consumable-name', function ()
{   
	return view ('consumables/consumable');
});
=======

Route::get('/equipment/{name}', 'EquipmentController@view_equipment')->name('view-equipment');

>>>>>>> b3e14344e2b3385f2c40431b787ca7c42eebfce2

Route::get('/equipment-list', function ()
{
	return view ('equipment/list-equipment');
});



Route::get('/', function () {
    return view('home');
});
Route::post('/walk', 'HomeController@walk');