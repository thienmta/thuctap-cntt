<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create (Request $request) {
            $name = $request->input('name');
            
            $data = array(
                'name' => $name
            );

            $category = new Category();

            if( (DB::table('categorys')->where('name', $name)->count()>=1) ){
                return redirect('/categorys/create')->with('error','Product name da duoc ton tai!');
            }
            else{
                $category->insert($data);
                return redirect('/categorys/show');
            }
    }

    public function edit (Request $request) {
            $name = $request->input('name');
            $id = $request->input('id');

            $category = new Category();

            if( (DB::table('categorys')->where('name', $name)->count()>=1) ){
                return redirect('/categorys/create')->with('error','Product name da duoc ton tai!');
            }
            else{
            	Category::where('id', $id)->update([
            		'name' => $name
            	]);
                return redirect('/categorys/show');
            }
    }
}
