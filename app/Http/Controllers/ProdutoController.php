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

	public function lista()
	{	
		$produtos = Produto::all();	
		return view('produto/listagem')->withProdutos($produtos);
	}

	public function home()
	{	
		$produtos = Produto::paginate(9);	
		return view('home')->withProdutos($produtos);
	}

	public function listaJson()
	{
		$produtos = Produto::all();
   		return $produtos;
	}

	public function mostra($id)
	{
		$produto = Produto::find($id);
		if(empty($produto))
		{ 
			return "Esse produto não existe";
		}

	return view('produto/detalhes')->with('p',$produto);
	}

	public function novo()
	{
		return view('produto/formulario')->with('categorias',Categoria::all());
	}

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

		public function remove($id)
	{
		$produto = Produto::find($id);
    	$produto->delete();
    	
    	return redirect()->action('ProdutoController@lista');
	}
}
