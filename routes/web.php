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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



/// FRONT ///
Route::get('/', 'front\FrontController@index');
Route::get('/celulares', 'front\FrontController@cells');
Route::get('/celular/{id}', 'front\FrontController@product');
Route::get('/accesorios', 'front\FrontController@accesorios');
Route::get('/accesorio/{id}', 'front\FrontController@product');
Route::get('/producto/{id}', 'front\FrontController@product');
Route::get('/contacto', 'front\FrontController@contact');
Route::post('/contacto', 'front\FrontController@contactPost');
Route::get('/faq', 'front\FrontController@faq');

Route::get('/busqueda/{resultado}', 'front\FrontController@scope');
Route::post('/busqueda/{res}', 'front\FrontController@scope');

Route::get('/carrito', 'Front\CartController@show');
Route::get('/cart/add/{id}', 'Front\CartController@add');
Route::get('/cart/destroy', 'Front\CartController@destroy');
Route::get('/cart/delete/{id}', 'Front\CartController@delete');



/// ADMIN ///

Route::get('/admin', 'admin\AdminController@index');

Route::get('/admin/products', 'admin\AdminController@showProducts');
Route::get('/admin/products/add', 'admin\AdminController@addProducts');
Route::post('/admin/products/add', 'admin\AdminController@storeProducts');
Route::get('/admin/products/edit/{id}', 'admin\AdminController@edit');
Route::post('/admin/products/edit/{id}', 'admin\AdminController@update');
Route::get('/admin/products/destroy/{id}', 'admin\AdminController@destroy');

Route::get('admin/categories', 'admin\AdminController@showCategories');
Route::get('/admin/categories/add', 'admin\AdminController@addCategories');
Route::post('/admin/categories/add', 'admin\AdminController@storeCategories');

Route::get('admin/brands', 'admin\AdminController@showBrands');
Route::get('/admin/brands/add', 'admin\AdminController@addBrands');
Route::post('/admin/brands/add', 'admin\AdminController@storeBrands');