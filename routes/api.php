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

Route::get('/products', 'ProductsController@getProducts');
Route::get('/testimonials', 'ProductsController@getTestimonials');
Route::get('/products/{id}', 'ProductsController@getProductById');
Route::get('/type', 'ProductsController@getTypes');

Route::post('/register', 'UserController@register');
Route::post('/cart', 'CartController@cart');
Route::get('/carts', 'CartController@getCart');
Route::get('/bucket', 'CartController@getCartedProd');

