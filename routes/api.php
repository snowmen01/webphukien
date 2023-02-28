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

Route::get('/product','ProductController@getAlldata');
Route::get('/find-product/{id}','ProductController@findProduct');
Route::put('/update-product/{id}','ProductController@updateProduct');
Route::post('/add-product','ProductController@addnewProduct');
Route::delete('/delete-product','ProductController@delProduct');
