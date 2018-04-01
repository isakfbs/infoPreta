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

//Pagina Inicial
Route::get('/home', 'HomeController@index')->name('home');

/**Route::get('/inicio', function () {
    return view('paginas.home');
});**/

//Pagina de produtos 
Route::get('/produtos', 'ProdutoController@paginaProdutos')->name('produtos');

Route::get('/vitrine', 'ProdutoController@vitrine');

//detalhes do produto
Route::get('/produtos/detalhes/{id}', 'ProdutoController@mostra')->where('id','[0-9]+');


//Admin
//Listra de produtos (Adimin)
Route::get('/listaprodutos','ProdutoController@lista');
Route::get('/listaprodutos/json', 'ProdutoController@listaJson');

//Adicionar produto formulario
Route::get('/produtos/novo','ProdutoController@novo');
Route::post('/produtos/adiciona','ProdutoController@adiciona');

//Remover produto
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

//Autenticacão
Auth::routes();


