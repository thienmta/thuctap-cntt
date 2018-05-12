<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportProduct extends Model
{
    protected $table = "importproducts";

    protected $fillable = [
        'id',
        'pro_id',
        'quantity',
        'importprice'
    ];
}
