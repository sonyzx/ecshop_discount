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
	return redirect()->route('goodses.index');
    // return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Auth::routes();
Route::group(
    [
        'namespace' => 'Web'
    ],
    function ($route) {
        $route->resource('goodses', 'GoodsController');
        $route->resource('shopping_carts', 'ShoppingCartController');
    }
);
