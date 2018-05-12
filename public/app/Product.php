<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'id',
        'name',
        'cat_id',
        'price'
    ];

    public $timestamps = false;

    public function category(){
		return $this->belongsTo('App\Category');
    }
}
