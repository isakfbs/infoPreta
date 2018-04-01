<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Produto;
use App\Http\Requests\ProdutosRequest;
use Request;
use App\Categoria;

class ProdutoController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth',['only' => ['adiciona','remove']]);
	}

	//retorna a listagem de produtos do banco de dados
	public function lista()
	{	
		$produtos = Produto::all();	
		return view('produto/listagem')->withProdutos($produtos);
	}

	//retorna a pagina de produtos.
	public function paginaProdutos()
	{
		$produtos = Produto::paginate(6);
		return view('produto/produtos')->withProdutos($produtos); 
	}

	//Retorna a lista de produtos no formato Json
	public function listaJson()
	{
		$produtos = Produto::all();
   		return $produtos;
	}

	//Retorna a pagina de detalhes do produto
	public function mostra($id)
	{
		$produto = Produto::find($id);
		if(empty($produto))
		{ 
			return "Esse produto não existe";
		}

	return view('produto/detalhes')->with('p',$produto);
	}

	//Retorna a view do formulario de cadastro de produtos
	public function novo()
	{
		return view('produto/formulario')->with('categorias',Categoria::all());
	}

	//Adiciona um produto e redireciona para a lista
	public function adiciona(ProdutosRequest $request)
	{
		//pega todos os dados do formulario
		$params = $request->all();
		$produto = new Produto($params);
		//salva no banco de dados
  		$produto->save();
		//retornar alguma view

		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}

	//Remove um produto, e redireciona para a lista
	public function remove($id)
	{
		$produto = Produto::find($id);
    	$produto->delete();
    	
    	return redirect()->action('ProdutoController@lista');
	}
}
