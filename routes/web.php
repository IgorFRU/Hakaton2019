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

Route::group(['prefix' => 'dashboard', 'namespace' => 'Admin', 'middleware' => ['auth']], function(){
    Route::get('/', 'CoreController@index')->name('dashboard');
    // Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    // Route::resource('/manufacture', 'ManufactureController', ['as'=>'admin']);
    // Route::resource('/currency', 'CurrencyController', ['as'=>'admin']);
    // Route::resource('/unit', 'UnitController', ['as'=>'admin']);
    // Route::resource('/rebate', 'RebateController', ['as'=>'admin']);
    // //Route::post('/manufacture', 'ManufactureController@index', ['as'=>'admin']);
    // //Route::get('/manufacture/sort', 'ManufactureController@sort', ['as'=>'admin']);
    // // Route::post('/manufacture/sort', 'ManufactureController@sort', ['as'=>'admin']);
    // Route::get('/product/category-{category}', 'ProductController@category', ['as'=>'admin'])->name('admin.product.category');
    // Route::resource('/product', 'ProductController', ['as'=>'admin']);
    // Route::any('/productimg', 'UploadImagesController@product', ['as'=>'admin'])->name('admin.productimg');
    // Route::resource('/menu', 'MenuController', ['as'=>'admin']);
    
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
