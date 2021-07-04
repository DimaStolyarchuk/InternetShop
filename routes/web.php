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

Route::get('/home', 'IndexController@index')->name('home');

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/brand', 'PageController@brand')->name('brand');
Route::get('/specials', 'PageController@specials')->name('specials');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/action', 'PageController@action')->name('action');
Route::get('/second_action', 'PageController@second_action')->name('second_action');
Route::get('/category/{id}', 'PageController@category')->name('category');

Route::get('/admin_home', 'Admin\HomeController@home')->name('admin_home');
Route::get('/home_form', 'Admin\HomeController@home_form')->name('home_form');
Route::post('/save_home', 'Admin\HomeController@savehome')->name('save_home');
Route::get('/home_edit/{id}', 'Admin\HomeController@edit_home')->name('edit_home');
Route::get('/home_delete/{id}', 'Admin\HomeController@delete_home')->name('delete_home');

Route::get('/admin_about', 'Admin\AboutController@about')->name('admin_about');
Route::get('/about_form', 'Admin\AboutController@about_form')->name('about_form');
Route::post('/save_about', 'Admin\AboutController@saveabout')->name('save_about');
Route::get('/about_edit/{id}', 'Admin\AboutController@edit_about')->name('edit_about');
Route::get('/about_delete/{id}', 'Admin\AboutController@delete_about')->name('delete_about');

Route::get('/admin_brand', 'Admin\BrandController@brand')->name('admin_brand');
Route::get('/brand_form', 'Admin\BrandController@brand_form')->name('brand_form');
Route::post('/save_brand', 'Admin\BrandController@savebrand')->name('save_brand');
Route::get('/brand_edit/{id}', 'Admin\BrandController@edit_brand')->name('edit_brand');
Route::get('/brand_delete/{id}', 'Admin\BrandController@delete_brand')->name('delete_brand');

Route::get('/admin_action', 'Admin\ActionController@action')->name('admin_action');
Route::get('/action_form', 'Admin\ActionController@action_form')->name('action_form');
Route::post('/save_action', 'Admin\ActionController@saveaction')->name('save_action');
Route::get('/action_edit/{id}', 'Admin\ActionController@edit_action')->name('edit_action');
Route::get('/action_delete/{id}', 'Admin\ActionController@delete_action')->name('delete_action');

Route::get('/admin_product', 'Admin\ProductController@product')->name('admin_product');
Route::get('/product_form', 'Admin\ProductController@product_form')->name('product_form');
Route::post('/save_product', 'Admin\ProductController@saveproduct')->name('save_product');
Route::get('/product_edit/{id}', 'Admin\ProductController@edit_product')->name('edit_product');
Route::get('/product_delete/{id}', 'Admin\ProductController@delete_product')->name('delete_product');

Route::get('/admin_category', 'Admin\CategoryController@category')->name('admin_category');
Route::get('/category_form', 'Admin\CategoryController@category_form')->name('category_form');
Route::post('/save_category', 'Admin\CategoryController@savecategory')->name('save_category');
Route::get('/category_edit/{id}', 'Admin\CategoryController@edit_category')->name('edit_category');
Route::get('/category_delete/{id}', 'Admin\CategoryController@delete_category')->name('delete_category');

