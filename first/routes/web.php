<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ADD PRODUCTS//
Route::get('/add', 'ProductsController@insertForm')->name('Add Products');
Route::get('/list', 'ProductsController@list')->name('List Products');
Route::post('/create', 'ProductsController@store');
//ADD PRODUCTS//

//EDIT PRODUCTS//
Route::get('/edit/{user}', 'ProductsController@editForm')->name('products.edit');
Route::post('/edit/{user}', 'ProductsController@updateprod')->name('products.edit');
//EDIT PRODUCTS//

//DELETE PRODUCTS//
Route::get('/delete/{user}', 'ProductsController@deleteForm')->name('products.delete');
Route::post('/delete/{user}', 'ProductsController@deleteprod')->name('products.delete');
//DELETE PRODUCTS//