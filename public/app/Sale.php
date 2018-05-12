<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = "sales";

    protected $fillable = [
        'id',
        'pro_id',
        'quantity'
    ];

    public $timestamps = false;
}
