<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public $timestamp = false;

    protected $fillable=[
        'code',
        'size',
        'cost',
        'saleable',
        'quantity',
        'minimum_quantity',
        'brand'
    ];

    public function sale(){
        $this->hasMany('App\Models\Sale');
    }
}
