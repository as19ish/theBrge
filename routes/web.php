<?php

Route::get('/','homeController@index')->name('home');

Route::get('/about-us','aboutUsController@index')->name('about');

Route::get('/service','serviceController@index')->name('service');

Route::get('/portfolio','portfolioController@index')->name('portfolio');

Route::get('/elements','elementsController@index')->name('elements');



Route::get('/contact','contactController@index')->name('contact');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
