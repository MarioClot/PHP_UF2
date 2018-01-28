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

Route::get('codiqr/{nom}', 'QRController@create')->name('codiqr');

Route::get('/registre', 'RegistreController@create');
Route::post('registre', 'RegistreController@store');

Route::delete('/deleteuser/{id}','UserController@delete');

//406
Route::get('/lab_406','QueryController@material_lab_406')->name('lab_406');

Route::delete('/deleteprod406/{id}','Lab406Controller@delete');

Route::get('/editprod406/{id}','Lab406Controller@create');
Route::post('editprod406/prodmod/{id}','Lab406Controller@update')->name('prodmod');

Route::get('/lab_406', 'Registre406Controller@create');
Route::post('lab_406', 'Registre406Controller@store');

//407
Route::get('/lab_407','QueryController@material_lab_407')->name('lab_407');

Route::delete('/deleteprod407/{id}','Lab407Controller@delete');

Route::get('/editprod407/{id}','Lab407Controller@create');
Route::post('editprod407/prodmod/{id}','Lab407Controller@update')->name('prodmod');

Route::get('/lab_407', 'Registre407Controller@create');
Route::post('lab_407', 'Registre407Controller@store');

//reactius lab 406
Route::get('/reactiuslab406','QueryController@material_reactius_lab_406')->name('reactius_lab_406');

Route::delete('/deleteprodR406/{id}','ReactiusLab406Controller@delete');

Route::get('/editprodR406/{id}','ReactiusLab406Controller@create');
Route::post('editprodR406/prodmod/{id}','ReactiusLab406Controller@update')->name('prodmod');

Route::get('/reactiuslab406', 'RegistreReactiusLab406Controller@create');
Route::post('reactiuslab406', 'RegistreReactiusLab406Controller@store');

//magatzem sanitat
Route::get('/magatzemsanitat','QueryController@material_magatzem_sanitat')->name('magatzem_sanitat');

Route::delete('/deleteprodms/{id}','MagatzemSanitatController@delete');

Route::get('/editprodms/{id}','MagatzemSanitatController@create');
Route::post('editprodms/prodmod/{id}','MagatzemSanitatController@update')->name('prodmod');

Route::get('/magatzemsanitat', 'RegistreMagatzemSanitatController@create');
Route::post('magatzemsanitat', 'RegistreMagatzemSanitatController@store');

//Proveidor
Route::get('/proveidor', 'ProveidorController@create')->name('proveidor');
Route::post('proveidor', 'ProveidorController@store');

Route::delete('/deleteprov/{id}','ProveidorEditaController@delete');
Route::get('/editprov/{id}','ProveidorEditaController@create');
Route::post('editprov/provmod/{id}','ProveidorEditaController@update')->name('provmod');

Route::get('/proveidor','QueryController@proveidor')->name('proveidor');


