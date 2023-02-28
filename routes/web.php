<?php

use Illuminate\Support\Facades\Route;

//Front-End
Route::get('/', 'HomeController@index');
Route::get('/index', 'HomeController@index');

Route::get('/view/{id}', 'ProductController@details_view');
Route::get('/save-cart', 'CartController@save');
Route::get('/checkout/cart/', 'CartController@cart');

//Back-End
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin-dashboard', 'AdminController@dashboard');

//Category-Product
Route::get('/add-category-product', 'CategoryProduct@add');
Route::get('/all-category-product', 'CategoryProduct@all');
Route::get('/edit-category-product/{id}', 'CategoryProduct@edit');
Route::get('/delete-category-product/{id}', 'CategoryProduct@delete');

Route::get('/active-category-product/{id}', 'CategoryProduct@active');
Route::get('/unactive-category-product/{id}', 'CategoryProduct@unactive');

Route::post('/save-category-product', 'CategoryProduct@save');
Route::post('/update-category-product/{id}', 'CategoryProduct@update');

//subcate-Product
Route::get('/add-category-product', 'CategoryProduct@add');
Route::get('/all-subcate/{id}', 'SubcateController@all');
Route::get('/edit-category-product/{id}', 'CategoryProduct@edit');
Route::get('/delete-category-product/{id}', 'CategoryProduct@delete');

Route::get('/active-category-product/{id}', 'CategoryProduct@active');
Route::get('/unactive-category-product/{id}', 'CategoryProduct@unactive');

Route::post('/save-category-product', 'CategoryProduct@save');
Route::post('/update-category-product/{id}', 'CategoryProduct@update');

//Brands-Product
Route::get('/add-brand-product', 'BrandProduct@add');
Route::get('/all-brand-product', 'BrandProduct@all');
Route::get('/edit-brand-product/{id}', 'BrandProduct@edit');
Route::get('/delete-brand-product/{id}', 'BrandProduct@delete');

Route::get('/active-brand-product/{id}', 'BrandProduct@active');
Route::get('/unactive-brand-product/{id}', 'BrandProduct@unactive');

Route::post('/save-brand-product', 'BrandProduct@save');
Route::post('/update-brand-product/{id}', 'BrandProduct@update');

//Product
Route::get('/add-product', 'ProductController@add');
Route::get('/all-product', 'ProductController@all');
Route::get('/edit-product/{id}', 'ProductController@edit');
Route::get('/delete-product/{id}', 'ProductController@delete');

Route::get('/active-product/{id}', 'ProductController@active');
Route::get('/unactive-product/{id}', 'ProductController@unactive');

Route::post('/save-product', 'ProductController@save');
Route::post('/update-product/{id}', 'ProductController@update');

//Gallery
Route::get('/add-gallery/{id}', 'GalleryController@add_gallery');
Route::post('/select-gallery', 'GalleryController@select_gallery');
Route::post('/insert-gallery/{id}', 'GalleryController@insert_gallery');
Route::post('/delete-gallery', 'GalleryController@delete_gallery');

//Banner
Route::get('/all-slider', 'SliderController@all');
Route::get('/add-slider', 'SliderController@add');
Route::post('/insert-slider', 'SliderController@insert');
Route::get('/delete-slider/{id}', 'SliderController@delete');

Route::get('/active-slider/{id}', 'SliderController@active');
Route::get('/unactive-slider/{id}', 'SliderController@unactive');

//Cart
Route::post('/add-cart-ajax', 'CartController@add_ajax');
Route::post('/update-qty', 'CartController@update_qty'); //Gửi bằng post thì k cần get
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/shopcart', 'CartController@cart');
Route::get('/delete-cart/{id}', 'CartController@delete_cart');

//Checkout
Route::get('/checkout', 'CheckoutController@show_checkout');
Route::post('/select-delivery', 'CheckoutController@selectdelivery');
Route::get('/done-cart', 'CheckoutController@donecart');
Route::post('/save-customer-order', 'CheckoutController@savecart');

//Customer
Route::get('/signin', 'CustomerController@signin');
Route::get('/signup', 'CustomerController@signup');
Route::post('/signin-customer', 'CustomerController@checklogin');
Route::get('/my-account', 'CustomerController@homemyaccount');
Route::get('/logout-cus', 'CustomerController@logout');


//Order
Route::get('/wait-order', 'OrderController@wait');
Route::get('/all-order', 'OrderController@all');
Route::get('/wait-order-view/{id}', 'OrderController@vieworder');
Route::get('/accept-order/{id}', 'OrderController@acceptorder');