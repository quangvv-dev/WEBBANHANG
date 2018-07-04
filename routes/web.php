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
// route::get('/','productController@product');

route::get('detail_p/{id}', 'productController@detail');
/*route::get('chitietsp/{id}',['as' => 'chitietsp','uses'=>'productController@chitietsp']);*/
 route::get('/' , 'productController@index');
 route::get('/login','UserController@directLogin');
 route::Post('/login','UserController@Login');
 route::get('/add','adminController@addP');
 route::get('/add','CategoryController@dropdow');
 route::post('/add','adminController@addSP');

 route::get('/upload','adminController@create');
 route::post('/upload','adminController@store');

route::get('gio-hang/{id}','CartController@add');
Route::get('gio-hang','CartController@show');