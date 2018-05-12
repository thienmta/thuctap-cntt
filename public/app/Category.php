<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categorys";

    protected $fillable = [
        'id',
        'name'
    ];
    public $timestamps = false;
}
