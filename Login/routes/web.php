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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lab_406','QueryController@material_lab_406')->name('lab_406');

Route::get('/registre', 'RegistreController@create');
Route::post('registre', 'RegistreController@store');

Route::delete('/deleteuser/{id}','UserController@delete');

Route::delete('/deleteprod/{id}','Lab406Controller@delete');

Route::get('/editprod/{id}','Lab406Controller@create');
Route::post('editprod/prodmod/{id}','Lab406Controller@update')->name('prodmod');

Route::get('/lab_406', 'Registre406Controller@create');
Route::post('lab_406', 'Registre406Controller@store');

Route::get('/proveidor', 'ProveidorController@create');
Route::post('proveidor', 'ProveidorController@store');

Route::delete('/deleteprov/{id}','ProveidorEditaController@delete');
Route::get('/editprov/{id}','ProveidorEditaController@create');
Route::post('editprov/provmod/{id}','ProveidorEditaController@update')->name('provmod');

Route::get('/proveidor','QueryController@proveidor')->name('proveidor');


