<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ItemAward extends Model
{
    use Notifiable;
    
    protected $connection ='player';
    
    protected $table = 'item_award';
    
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
  			'pid','login','vnum','count','given_time','taken_time', 'item_id', 'why', 'socket0', 'socket1', 'socket2', 'mall',
    ];
}
