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
//Route::get('/lab_406',function(){
    //$material = \App\Http\Controllers\QueryController::call('QueryController@material_lab_406')->content;
   //return view ('lab_406')->with('material',$material);
//});
