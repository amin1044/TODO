<?php

use Illuminate\Support\Facades\Route;


Route::resource('attendance', 'AttendanceController');

Route::middleware('ajax')->prefix('attendance/ajax/')->name('attendance.ajax.')->group(function () {
    Route::post('list', 'AttendanceController@list')->name('list');
    Route::delete('delete/{form}', 'AttendanceController@destroy')->name('destroy');
    Route::post('restore','AttendanceController@restore')->name('restore');
});

Route::resource('admin_attendance', 'AdminAttendanceController');


Route::middleware('ajax')->prefix('admin_attendance/ajax/')->name('admin_attendance.ajax.')->group(function () {
    Route::post('list', 'AdminAttendanceController@list')->name('list');
    Route::delete('delete/{form}', 'AdminAttendanceController@destroy')->name('destroy');
    Route::post('restore','AdminAttendanceController@restore')->name('restore');
});
