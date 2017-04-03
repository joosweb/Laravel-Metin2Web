<?php

namespace App\Http\Controllers;

use DB;

class PerfilController extends Controller
{
    public function index($playerName)
    {
        $data = DB::table('player.player')
            ->select('player.name as name', 'player.level as level', 'player_index.empire', 'account.zipcode', 'guild.name as guildname', 'player.job as job', 'player.exp', 'player.playtime', 'player.alignment', 'player.gold')
            ->leftJoin('player.player_index', 'player_index.id', '=', 'player.account_id')
            ->leftJoin('player.guild_member', 'guild_member.pid', '=', 'player.player.id')
            ->leftJoin('player.guild', 'guild.id', '=', 'guild_member.guild_id')
            ->leftjoin('account', 'account.id', '=', 'player.account_id')
            ->orderBy('player.level', 'desc')
            ->orderBy('player.exp', 'desc')
            ->orderBy('player.playtime', 'desc')
            ->where('player.name', $playerName)
            ->first();

        return view('perfil', ['data' => $data]);
    }
}
