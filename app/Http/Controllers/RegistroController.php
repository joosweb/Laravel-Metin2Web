<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use DateTime;
use DB;

class RegistroController extends Controller
{

    public function index()
    {
        return view('registro');
    }

    public function store(RegisterRequest $request)
    {

        $now = new DateTime();

        $query = DB::insert('insert into account (login,password,real_name,social_id,email,zipcode,create_time) values (?, PASSWORD(?), ?, ?, ?, ?, ?)', [$request['login'], $request['password'], $request['real_name'], $request['social_id'], $request['email'], $request['zipcode'], $now]);

        if ($query) {
            return view('registro')->withSuccess('La cuenta con el nombre ' . $request['login'] . ' ha sido creada exitosamente.');
        } else {
            return view('registro')->withError('El registro ha fallado, por favor contacte con un administrador, o intente nuevamente.');
        }

    }

}
