<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function lista()
    {
    	$categorias = Categoria::all();
    	return $categorias;
    }
}
