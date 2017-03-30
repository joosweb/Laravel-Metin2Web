<?php

namespace App\Http\Controllers\tienda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Itemshop;

class TiendaController extends Controller
{
    public function index() {

    	$categorias = Categoria::all(); 

    	$articulos = Itemshop::paginate(5);

    	return view('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos])->with('success', false);
    }

    public function show($vnum) {

    	 $categorias = Categoria::all(); 

    	 $articulos = Itemshop::paginate(5);

    	 return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos])->with('success', 'El item '.$vnum.' ha sido comprado exitosamente');

    }
}
