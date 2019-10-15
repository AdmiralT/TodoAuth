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
    return redirect()->route('todos.index');
});

Route::get('/todos','TodoController@index')->name('todos.index');
Route::get('/todos/create', 'TodoController@create')->name('todos.create');
Route::post('/todos','TodoController@store')->name('todos.store');
Route::get('/todos/{id}','TodoController@show')->name('todos.show');
Route::get('todos/{id}/edit','TodoController@edit')->name('todos.edit');
Route::put('todos/{id}','TodosController@update')->name('todos.update');
Route::delete('todos/{id}', 'TodosController@destroy')->name('todos.destroy');
Route::get('/profile','ProfileController@index')->name('profille.index');
Route::put('/profile','ProfileController@update')->name('profile.update');

//Auth::routes(['verify' => true]);
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home');
