<?php

namespace App\Http\Controllers\tienda;

use App\Categoria;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FuncionesController;
use App\Itemshop;
use DB;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index()
    {
        $controller = new FuncionesController;

        $categorias = Categoria::get();

        $articulos = Itemshop::paginate(5);

        $coins = [
            'coins' => $controller->getCoins(),
        ];

        return view('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos, 'coins' => $coins['coins']])->with('mensaje', false);
    }

    public function buy($vnum)
    {

        // LISTADO DE CATEGORIAS E ITEMS
        $categorias = Categoria::all();
        $articulos  = Itemshop::paginate(5);

        $controller = new FuncionesController;

        //// INSERTAR ITEM EN ITEM_AWARD
        $buy = new FuncionesController;

        $mensaje = [
            'success' => ['El item ha sido comprado satisfactoriamente', 'success'],
            'NoCoins' => ['Coins insuficientes, puedes recargar en el siguiente link ...', 'warning'],
            'NoExist' => ['El item seleccionado no existe en la tienda.', 'danger'],
        ];

        switch ($buy->BuyItem($vnum)) {

            case 'success':
                $coins = [
                    'coins' => $controller->getCoins(),
                ];
                return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos, 'coins' => $coins['coins']])->with('mensaje', $mensaje['success']);
                break;
            case 'NoCoins':
                $coins = [
                    'coins' => $controller->getCoins(),
                ];
                return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos, 'coins' => $coins['coins']])->with('mensaje', $mensaje['NoCoins']);
                break;
            case 'NoExist':
                $coins = [
                    'coins' => $controller->getCoins(),
                ];
                return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos, 'coins' => $coins['coins']])->with('mensaje', $mensaje['NoExist']);
                break;
        }

        /////////////////////////////////////

    }

    public function getItems($id)
    {

        $categorias = Categoria::all();

        $articulos = Itemshop::where('id_categoria', $id)->paginate(5);

        $controller = new FuncionesController;

        $coins = [
            'coins' => $controller->getCoins(),
        ];

        if ($articulos) {
            return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos, 'coins' => $coins['coins']])->with('mensaje', false);
        } else {
            return View('/tienda/tienda', ['categoria' => $categorias, 'articulo' => $articulos, 'coins' => $coins['coins']])->with('mensaje', 'No existen articulos para esta categoria');
        }

    }

    public function getDetails(Request $request)
    {
        $vnum  = $request->vnum;
        $query = DB::table('player.item_proto_shop')->where('vnum', $vnum)->first();

        return view('tienda', ['result' => json_encode($query)]);
    }
}
