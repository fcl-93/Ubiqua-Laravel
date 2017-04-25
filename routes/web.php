<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect("/home");
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/stock', 'StockController@stock');

Route::get('/shopping_list', 'ToBuyController@shopping_list');

Route::get('/sensors', 'SensorsController@sensors');

Route::get('/recipes', 'RecipesController@recipes');


