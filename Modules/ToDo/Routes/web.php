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

Route::get('todo/show/{$id}', 'ToDoController@show')->name('todo.show');
Route::get('todo', 'ToDoController@index')->name('todo.index');
Route::get('todo/create', 'ToDoController@create')->name('todo.create');
Route::post('todo/store', 'ToDoController@store')->name('todo.store');
Route::post('todo/update/{id}', 'ToDoController@update')->name('todo.updates');

Route::middleware('ajax')->group(function () {
    Route::prefix('todo/ajax')->name('todo.ajax.')->group(function () {
        Route::post('list', 'ToDoController@list')->name('list');
        Route::delete('delete/{todo}', 'ToDoController@destroy')->name('destroy');
        Route::post('restore', 'ToDoController@restore')->name('restore');
        Route::post('enable', 'ToDoController@enable')->name('enable');
        Route::post('disable', 'ToDoController@disable')->name('disable');
    });
});

