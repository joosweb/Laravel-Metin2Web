<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use DB;

class WelcomeController extends Controller
{
    public function index() {

    	$data = DB::table('player.player')->orderBy('level', 'desc')->paginate(5);

    	return view('welcome');
    }
}
