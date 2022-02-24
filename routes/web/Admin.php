<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::group(['middleware' => ['role']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::prefix('roles')->name('roles.ajax.')->group(function () {
        Route::post('list', 'RoleController@list')->name('list');
        Route::delete('delete/{roles}', 'RoleController@destroy')->name('destroy');
        Route::post('restore', 'RoleController@restore')->name('restore');
    });
});
