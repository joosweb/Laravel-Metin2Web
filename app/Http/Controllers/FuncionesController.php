<?php

namespace App\Http\Controllers;

use App\ItemAward;
use DateTime;
use DB;
use Illuminate\Support\Facades\Auth;

class FuncionesController extends Controller
{

    public function CheckItemExist($vnum)
    {
        $query = DB::table('player.item_proto_shop')->select('prices')->where('vnum', $vnum)->first();
        if ($query) {
            return $query->prices;
        } else {
            return false;
        }
    }

    public function getCoins()
    {
        $query = DB::table('account.account')->select('coins')->where('login', Auth::user()->login)->first();
        return $query->coins;
    }

    public function CheckCoins($vnum)
    {
        $query = DB::table('account.account')->select('coins')->where('login', Auth::user()->login)->first();
        if ($query->coins >= $this->CheckItemExist($vnum)) {
            $coinsResult = ($query->coins - $this->CheckItemExist($vnum));
            if (DB::table('account')
                ->where('login', Auth::user()->login)
                ->update(['coins' => $coinsResult])) {
                return true;
            }

        } else {
            return false;
        }

    }

    public function BuyItem($vnum)
    {

        $now = new DateTime();

        $query = DB::table('player.item_proto_shop')->select('count')->where('vnum', $vnum)->first();

        if ($this->CheckItemExist($vnum)) {

            if ($this->CheckCoins($vnum)) {

                $item_award             = new ItemAward;
                $item_award->pid        = Auth::User()->id;
                $item_award->login      = 'koxesaurio';
                $item_award->vnum       = $vnum;
                $item_award->count      = $query->count;
                $item_award->given_time = $now;
                $item_award->taken_time = null;
                $item_award->item_id    = 149;
                $item_award->why        = 'ITEM_SHOP_METIN2';
                $item_award->socket0    = 1;
                $item_award->socket1    = 1;
                $item_award->socket2    = 1;
                $item_award->mall       = 1;
                $item_award->save();

                return 'success';

            } else {
                return 'NoCoins';
            }
        } else {
            return 'NoExist';
        }

    }
}
