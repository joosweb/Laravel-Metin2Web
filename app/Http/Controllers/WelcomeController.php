<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use DB;

class WelcomeController extends Controller
{
    public function index() {

    	$data = DB::table('player')->orderBy('level', 'desc')->paginate(2);

    	return view('welcome' , ['data' => $data]);
    }
}
