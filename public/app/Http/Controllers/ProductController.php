<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    public function create (Request $request) {
            $name = $request->input('name');
            $cat_id = $request->input('category');
            $price = $request->input('price');

            $data = array(
                'name' => $name,
                'cat_id' => $cat_id,
                'price' => $price
            );

            $product = new Product();

            if( (DB::table('products')->where('name', $name)->count()>=1) ){
                return redirect('/products/create')->with('error','Product name da duoc ton tai!');
            }
            else{
                $product->insert($data);
                return redirect('/products/show');
            }
    }
}
