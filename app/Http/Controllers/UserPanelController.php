<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;

class UserPanelController extends Controller
{
    public function index()
    {
        $find = DB::table('player.player')
            ->select('player.job', 'player.name', 'player.level')
            ->where('account_id', Auth::user()->id)
            ->get();

        return view('/panel/panel', ['Player' => $find]);
    }
}
