<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
// Route::get('/', 'IndexController@index')->name('Mrt Organic');
// Route::get('/test', 'IndexController@test')->name('Mrt Organic');

// Route::get('/admin/{any}', 'AppController@index')->middleware('auth')->where('any', '.*');

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/{any}', 'IndexController@index')->where('any', '.(?!admin)');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/{any}', 'AppController@index')->middleware('auth')->where('any', '.*');
    });
});