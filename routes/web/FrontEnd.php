<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home.index');
Route::namespace("Pages")->name('pages.')->group(function () {
    Route::get('about-us', 'PagesController@about_us')->name('about-us');
    Route::get('contact-us', 'PagesController@contact_us')->name('contact-us');
    Route::post('form-contact', 'PagesController@form_contact')->name('form-contact');
    Route::get('faq', 'PagesController@faq')->name('faq');
    Route::post('email-notice', 'PagesController@email_notice')->name('email-notice');
});
Route::namespace("User")->name('user.')->group(function () {
    Route::get('users', 'UserController@index')->name('users');
    Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
    Route::post('update/{id}', 'UserController@update')->name('update_user');

});


