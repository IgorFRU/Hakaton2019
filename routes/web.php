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
    Route::get('/settings', 'CoreController@settings')->name('dashboard.settings');
    Route::post('/settings/store', 'CoreController@store')->name('dashboard.settings.store');
    Route::post('/settings/destroy', 'CoreController@destroy')->name('dashboard.settings.destroy');
    Route::post('/settings/userdata', 'CoreController@userdata')->name('dashboard.user_data.store');
    // Route::get('/catalog', 'CoreController@catalog')->name('dashboard.catalog');
    Route::resource('/catalog', 'GoodController')->names([
        'index' => 'dashboard.catalog.index'
    ]);
    Route::resource('/customers', 'CustomerController')->names([
        'index' => 'dashboard.customer.index',
        'create' => 'dashboard.customer.create',
        'show' => 'dashboard.customer.show',
        'store' => 'dashboard.customer.store'
    ]);
    Route::resource('/adresses', 'AddressController')->names([
        'index' => 'dashboard.address.index',
        'store' => 'dashboard.address.store'
    ]);
    Route::get('/orders', 'OrderController@index')->name('dashboard.orders.index');
    Route::get('/search', 'SearchController@index')->name('dashboard.search');
    Route::get('/orders/{$id}', 'OrderController@show')->name('dashboard.orders.show');
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
