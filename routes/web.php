<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function () {
    return 'Hola mundo';
});
Route::post('/usuario', function () {
    return 'Hola usuario';
});*/

Route::view('/', 'welcome');
/*Route::get('/usuario', function(){
    return 'hola usuario';
});*/

Route::get('usuario', 'UserController@index')->name('usuario');
Route::get('usuario/crear', 'UserController@create')->name('usuario.crear');


Route::get('menu', 'MenuController@index')->name('menu');

Route::get('menu/crear', 'MenuController@create')->name('menu.crear');
//Route::post('menu', 'MenuController@guardar')->name('menu.guardar');
