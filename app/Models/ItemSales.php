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
        $this->belongsTo('App\Models\Inventory');
    }

    public function service(){
        $this->belongsTo('App\Models\Service');
    }
}
