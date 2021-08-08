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

Route::get('/', 'PageController@home')->name('/');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/brand', 'PageController@brand')->name('brand');
Route::get('/basket/', 'PageController@basket')->name('basket');
Route::get('/save_basket/{id}', 'PageController@saveBasket')->name('save_basket');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/entry', 'PageController@entry')->name('entry');
Route::get('/action', 'PageController@action')->name('action');
Route::get('/second_action', 'PageController@second_action')->name('second_action');
Route::get('/category/{id}', 'PageController@category')->name('category');
Route::get('/custom', 'PageController@custom')->name('custom');
Route::get('/thanks', 'PageController@thanks')->name('thanks');



Route::get('/admin_home', 'Admin\HomeController@home')->name('admin_home');
Route::get('/home_form', 'Admin\HomeController@home_form')->name('home_form');
Route::post('/save_home', 'Admin\HomeController@saveHome')->name('save_home');
Route::get('/home_edit/{id}', 'Admin\HomeController@edit_home')->name('edit_home');
Route::get('/home_delete/{id}', 'Admin\HomeController@delete_home')->name('delete_home');

Route::get('/admin_about', 'Admin\AboutController@about')->name('admin_about');
Route::get('/about_form', 'Admin\AboutController@about_form')->name('about_form');
Route::post('/save_about', 'Admin\AboutController@saveAbout')->name('save_about');
Route::get('/about_edit/{id}', 'Admin\AboutController@edit_about')->name('edit_about');
Route::get('/about_delete/{id}', 'Admin\AboutController@delete_about')->name('delete_about');

Route::get('/admin_brand', 'Admin\BrandController@brand')->name('admin_brand');
Route::get('/brand_form', 'Admin\BrandController@brand_form')->name('brand_form');
Route::post('/save_brand', 'Admin\BrandController@saveBrand')->name('save_brand');
Route::get('/brand_edit/{id}', 'Admin\BrandController@edit_brand')->name('edit_brand');
Route::get('/brand_delete/{id}', 'Admin\BrandController@delete_brand')->name('delete_brand');

Route::get('/admin_action', 'Admin\ActionController@action')->name('admin_action');
Route::get('/action_form', 'Admin\ActionController@action_form')->name('action_form');
Route::post('/save_action', 'Admin\ActionController@saveAction')->name('save_action');
Route::get('/action_edit/{id}', 'Admin\ActionController@edit_action')->name('edit_action');
Route::get('/action_delete/{id}', 'Admin\ActionController@delete_action')->name('delete_action');

Route::get('/admin_secondaction', 'Admin\SecondActionController@secondaction')->name('admin_secondaction');
Route::get('/secondaction_form', 'Admin\SecondActionController@secondaction_form')->name('secondaction_form');
Route::post('/save_secondaction', 'Admin\SecondActionController@saveSecondAction')->name('save_secondaction');
Route::get('/secondaction_edit/{id}', 'Admin\SecondActionController@edit_secondaction')->name('edit_secondaction');
Route::get('/secondaction_delete/{id}', 'Admin\SecondActionController@delete_secondaction')->name('delete_secondaction');

Route::get('/admin_product', 'Admin\ProductController@product')->name('admin_product');
Route::get('/product_form', 'Admin\ProductController@product_form')->name('product_form');
Route::post('/save_product', 'Admin\ProductController@saveProduct')->name('save_product');
Route::get('/product_edit/{id}', 'Admin\ProductController@edit_product')->name('edit_product');
Route::get('/product_delete/{id}', 'Admin\ProductController@delete_product')->name('delete_product');

Route::get('/admin_category', 'Admin\CategoryController@category')->name('admin_category');
Route::get('/category_form', 'Admin\CategoryController@category_form')->name('category_form');
Route::post('/save_category', 'Admin\CategoryController@saveCategory')->name('save_category');
Route::get('/category_edit/{id}', 'Admin\CategoryController@edit_category')->name('edit_category');
Route::get('/category_delete/{id}', 'Admin\CategoryController@delete_category')->name('delete_category');

Route::post('/save_contact', 'Admin\ContactController@saveContactsMail')->name('save_contact');

Route::post('/add_to_basket', 'BasketController@addToBasket')->name('addToBasket');

Route::get('/admin_comment', 'Admin\CommentsController@comment')->name('admin_comment');
Route::get('/comment_form', 'Admin\CommentsController@comment_form')->name('comment_form');
Route::post('/save_comment', 'Admin\CommentsController@saveСomment')->name('save_comment');
Route::get('/comment_edit/{id}', 'Admin\CommentsController@edit_comment')->name('edit_comment');
Route::get('/comment_delete/{id}', 'Admin\CommentsController@delete_comment')->name('delete_comment');

Route::post('/save_custom', 'Admin\CustomController@saveCustom')->name('save_custom');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registration', 'Auth\RegisterController@registration')->name('registration');


