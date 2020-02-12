<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicing extends Model
{
    public $timestamp = false;

    protected $fillable = [
        'code',
        'description',
        'cost',
        'provided_by'
    ];

    public function sale()
    {
        $this->hasMany('App\Models\Sale');
    }
}
