<?php

Route::get('/', 'FrontController@index');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/travelDestination', 'FrontController@travelDestination')->name('travelDestination');
//Route::get('/destinationDetails', 'FrontController@destinationDetails')->name('destinationDetails');
Route::get('/contact', 'FrontController@contact')->name('contact');



Auth::routes();

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('tag','TagController');
});
Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
