<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;


class ImagemController extends Controller
{	

	
	public function editarImagem()
	{	

	    Image::make('img/produto.png')->resize(200, 200)->save('img/produto2.png');
	    //return $img->response('png');
		//$image = Image::make('public/image1.png')->resize(300, 200)->save('public/image2.png');
	}
}
