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
//Autenticacão
Auth::routes();

Route::get('/', function () {
    return view('Theme.paginas.index');
});

Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');

Route::get('/carrinho/adicionar', function() {
	return redirect()->route('index');
});

Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');

//Pagina Inicial
Route::get('/index', 'HomeController@index')->name('index');

/**Route::get('/inicio', function () {
    return view('paginas.home');
});**/

//Pagina de produtos 
Route::get('/shop','ProdutoController@paginaProdutos')->name('shop');

//detalhes do produto
Route::get('/product/{id}', 'ProdutoController@mostra')->where('id','[0-9]+');


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

// usage inside a laravel route
Route::get('/a', 'ImagemController@editarImagem');


//teste theme

Route::get('/blog', function () {
    return view('Theme.paginas.blog');
});


Route::get('/blogsingle', function () {
    return view('Theme.paginas.blog_single');
});

Route::get('/cart', function () {
    return view('Theme.paginas.cart');
})->name('carrinho');

Route::get('/contact', function () {
    return view('Theme.paginas.contact');
})->name('contato');



Route::get('/regular', function () {
    return view('Theme.paginas.regular');
});

