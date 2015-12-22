<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('articulos', 'ArticulosController@index');
Route::get('articulos/crear','ArticulosController@create');
//Route::get('productos/crear','ProductosController@create');
//Route::post('productos','ProductosController@store');
Route::resource('productos','ProductosController');
Route::resource('categorias','CategoriasController');

Route::resource('clientes', 'UsersController');
Route::resource('empleados', 'EmpController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
