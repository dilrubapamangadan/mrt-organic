<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category', 'CategoryController@index');
Route::prefix('category')->group(function () {
    Route::post('/store', 'CategoryController@store');
    Route::put('/{id}', 'CategoryController@update');
    Route::put('/edit/{id}', 'CategoryController@update');
    Route::delete('/{id}', 'CategoryController@destroy');
});

Route::get('/product', 'ProductController@index');
Route::prefix('product')->group(function () {
    Route::post('/store', 'ProductController@store');
    Route::put('/{id}', 'ProductController@update');
    Route::put('/edit/{id}', 'ProductController@update');
    Route::delete('/{id}', 'ProductController@destroy');
});

Route::get('/store', 'StoreController@index');
Route::prefix('store')->group(function () {
    Route::get('/category/{id}', 'StoreController@storeCategories');
});