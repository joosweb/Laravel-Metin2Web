<?php

namespace App\Http\Controllers\tienda;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Itemshop;
use App\Account;
use DateTime;
use DB;

class TiendaController extends Controller
{
    public function index() {

    	$categorias = Categoria::all(); 

    	$articulos = Itemshop::paginate(5);

    	return view('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos])->with('success', false);
    }

    public function buy($vnum) {

    	 $categorias = Categoria::all();

    	 $articulos = Itemshop::paginate(5);
         
         $now = new DateTime();

         return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos])->with('success', 'El item ha sido comprado satisfactoriamente');
    }

    public function getItems($id) {

         $categorias = Categoria::all(); 

         $articulos = Itemshop::where('id_categoria', $id)->paginate(5);

         if($articulos) {
            return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos])->with('success', false);
         }
         else {
            return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos])->with('success', 'No existen articulos para esta categoria');
         }

         
    }
}
