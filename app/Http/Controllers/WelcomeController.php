<?php

namespace App\Http\Controllers;

use DB;

class WelcomeController extends Controller
{
    public function index()
    {

        $data = DB::table('player.player')->orderBy('level', 'desc')->paginate(5);

        return view('welcome', ['top5' => $data]);
    }
}
