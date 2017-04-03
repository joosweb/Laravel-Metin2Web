<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // Load your objects
        $data = DB::table('player.player')
            ->select('player.name as name', 'player.level as level', 'player_index.empire', 'account.zipcode', 'guild.name as guildname', 'player.job as job')
            ->leftJoin('player.player_index', 'player_index.id', '=', 'player.account_id')
            ->leftJoin('player.guild_member', 'guild_member.pid', '=', 'player.player.id')
            ->leftJoin('player.guild', 'guild.id', '=', 'guild_member.guild_id')
            ->leftjoin('account', 'account.id', '=', 'player.account_id')
            ->orderBy('player.level', 'desc')
            ->orderBy('player.exp', 'desc')
            ->orderBy('player.playtime', 'desc')
            ->limit(5)
            ->get();

        // Make it available to all views by sharing it
        view()->share('rankingtop', $data);
    }
}
