<?php


Route::view('/', 'home')->name('home');


Route::view('/pushForm', 'push_form')->name('form.view');



Route::get('/prueba', 'NotificationsController@create');