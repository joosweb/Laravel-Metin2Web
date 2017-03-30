<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Itemshop extends Model
{
    use Notifiable;
    
    protected $connection ='itemshop';
    protected $table = 'item_proto_shop';
    
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vnum','name','prices','img','id_categoria','content', 'count',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'prices',
    ];
}
