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

Route::get('/dashboard', 'DashboardController@index');
Route::get('/enquire', 'EnquiryController@show');
Route::post('/enquire', 'EnquiryController@store');
Route::post('/contact', 'EnquiryController@storeContact');

Route::prefix('category')->group(function () {
    Route::get('/', 'CategoryController@index');    
    Route::post('/store', 'CategoryController@store')->middleware('auth:api');
    Route::get('/{id}', 'CategoryController@show');
    Route::put('/{id}', 'CategoryController@update')->middleware('auth:api');
    Route::get('/store/{slug}', 'CategoryController@storeCategories');
    Route::get('/details/{slug}', 'CategoryController@categoryDetails');
    // Route::put('/edit/{id}', 'CategoryController@update');
    Route::delete('/{id}', 'CategoryController@destroy')->middleware('auth:api');
});

Route::prefix('product')->group(function () {
    Route::get('/', 'ProductController@index');
    Route::post('/store', 'ProductController@store')->middleware('auth:api');
    Route::put('/{id}', 'ProductController@update')->middleware('auth:api');
    Route::get('/{id}', 'ProductController@show');
    Route::get('/category/{slug}', 'ProductController@categoryProduct');
    Route::get('/bySlug/{slug}', 'ProductController@productBySlug');
    // Route::put('/edit/{id}', 'ProductController@update');
    Route::delete('/{id}', 'ProductController@destroy')->middleware('auth:api');
});

Route::prefix('store')->group(function () {
    Route::get('/', 'StoreController@index');
    Route::get('/category/{id}', 'StoreController@storeCategories');
});