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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return view('home');
});

Route::get('/todo','todolistsController@todo')->name('todo');

Route::post('/newtodo','todolistsController@newtodo')->name('newtodo');

Route::get('/edit/{id}','todolistsController@edit');

Route::put('/edit/edit/{id}','todolistsController@store');

Route::get('delete/{id}', 'todolistsController@delete');
