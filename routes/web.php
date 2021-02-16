<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'IndexController@index')->name('Mrt Organic');

Route::get('/{any}', 'AppController@index')->where('any', '.*');
