<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = "stores";

    protected $fillable = [
        'id',
        'pro_id',
        'quantity'
    ];

    public $timestamps = false;
}
