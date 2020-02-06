<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemSales extends Model
{
    public $timestamp = false;

    protected $fillable=[
        'item_id',
        'service_id',
        'total_cost',
        'quantity',
        'type',
        'user_id'
    ];

    public function item(){
        return $this->belongsTo('App\Models\Inventory','item_id');
    }

    public function service(){
        return $this->belongsTo('App\Models\Servicing', 'service_id');
    }

    public function user_id(){
        $user_id = \Auth::user()->getUserInfo()['sub'];
        return $user_id;
    }
}
