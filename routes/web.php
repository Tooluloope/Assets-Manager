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
Route::get('/personnel', 'PersonnelController@index')->name('all-personnel');
Route::post('/personnel', 'PersonnelController@create')->name('create-personnel');
Route::post('/personnel/update', 'PersonnelController@update')->name('update-personnel');
Route::any('/personnel/delete-cert/{type}', 'PersonnelController@delete_certificate')->name('delete-certificate');
Route::get('/personnel/{name}', 'PersonnelController@person')->name('person');
Route::any('/personnel/delete/{id}', 'PersonnelController@delete')->name('delete-personnel');



Route::get('/projects', 'ProjectController@index')->name('projects');
Route::post('/project', 'ProjectController@create')->name('project');
Route::post('/project/update', 'ProjectController@update')->name('update-project');
Route::any('/projects/{name}/add-personnel', 'ProjectController@add_personnel')->name('add-personnel');
Route::any('/projects/{name}/remove-personnel', 'ProjectController@remove_personnel')->name('remove-personnel');
Route::get('/projects/{name}/personnel', 'ProjectController@view_personnel')->name('view-personnel');
Route::get('/projects/{name}/manifest', 'ProjectController@view_manifest')->name('view-manifest');

Route::any('/projects/{name}/manifest/add', 'ManifestController@add_personnel');
Route::any('/projects/{name}/manifest/remove', 'ManifestController@remove_personnel');

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
Route::get('/edit-equipments', function ()
{   
	return view ('equipments/edit-equipments');
});
Route::get('/add-equipments', function ()
{
	return view ('equipments/add-equipments');
});



Route::get('/', function () {
    return view('home');
});
Route::post('/walk', 'HomeController@walk');