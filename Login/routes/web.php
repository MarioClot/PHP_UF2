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

Route::delete('/delete/{id}','UserController@delete');