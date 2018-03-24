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
    return view('home');
});

/**Route::get('/inicio', function () {
    return view('paginas.home');
});**/

Route::get('/vitrine', 'ProdutoController@vitrine');

Route::get('/produtos','ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id','[0-9]+');

Route::get('/produtos/novo','ProdutoController@novo');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::post('/produtos/adiciona','ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Auth::routes();

Route::get('/home', 'ProdutoController@home')->name('home');
