<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'IndexController@index')->name('Mrt Organic');
Route::get('/test', 'IndexController@test')->name('Mrt Organic');

Route::get('/admin/{any}', 'AppController@index')->where('any', '.*');
