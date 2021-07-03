<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
// Route::get('/', 'IndexController@index')->name('Mrt Organic');
// Route::get('/test', 'IndexController@test')->name('Mrt Organic');

// Route::get('/admin/{any}', 'AppController@index')->middleware('auth')->where('any', '.*');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/{any}', 'AppController@index')->middleware('auth')->where('any', '.*');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/contact', 'IndexController@index');
    Route::get('/about', 'IndexController@index');
    Route::get('/products', 'IndexController@index');
    Route::get('/products/{slug}', 'IndexController@index');

});