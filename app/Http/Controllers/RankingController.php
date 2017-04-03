<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index()
    {
        DB::statement(DB::raw('set @rownum=0'));

        $data = DB::table('player.player')
            ->select(DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'player.name as name', 'player.level as level', 'player_index.empire', 'account.zipcode', 'guild.name as guildname', 'player.job as job')
            ->leftJoin('player.player_index', 'player_index.id', '=', 'player.account_id')
            ->leftJoin('player.guild_member', 'guild_member.pid', '=', 'player.player.id')
            ->leftJoin('player.guild', 'guild.id', '=', 'guild_member.guild_id')
            ->leftjoin('account', 'account.id', '=', 'player.account_id')
            ->orderBy('player.level', 'desc')
            ->orderBy('player.exp', 'desc')
            ->orderBy('player.playtime', 'desc')
            ->paginate(50);

        return view('ranking', ['ranking' => $data]);
    }

    public function Search(Request $request)
    {
        DB::statement(DB::raw('set @rownum=0'));

        $rank = array();

        $data = DB::table('player.player')
            ->select(DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'player.name as name', 'player.level as level', 'player_index.empire', 'account.zipcode', 'guild.name as guildname', 'player.job as job')
            ->leftJoin('player.player_index', 'player_index.id', '=', 'player.account_id')
            ->leftJoin('player.guild_member', 'guild_member.pid', '=', 'player.player.id')
            ->leftJoin('player.guild', 'guild.id', '=', 'guild_member.guild_id')
            ->leftjoin('account', 'account.id', '=', 'player.account_id')
            ->orderBy('player.level', 'desc')
            ->orderBy('player.exp', 'desc')
            ->orderBy('player.playtime', 'desc')
            ->get();

        $data_search = DB::table('player.player')
            ->select('player.name as name', 'player.level as level', 'player_index.empire', 'account.zipcode', 'guild.name as guildname', 'player.job as job')
            ->leftJoin('player.player_index', 'player_index.id', '=', 'player.account_id')
            ->leftJoin('player.guild_member', 'guild_member.pid', '=', 'player.player.id')
            ->leftJoin('player.guild', 'guild.id', '=', 'guild_member.guild_id')
            ->leftjoin('account', 'account.id', '=', 'player.account_id')
            ->orderBy('player.level', 'desc')
            ->orderBy('player.exp', 'desc')
            ->orderBy('player.playtime', 'desc')
            ->where('player.name', $request->name)
            ->paginate(2);

        foreach ($data as $datas) {

            if ($datas->name == $request->name) {
                $rank = $datas->rownum;
            }
        }

        return view('ranking', ['ranking' => $data_search, 'rank' => $rank]);
        exit();

    }

}
