<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registeradmin', function () {
    return view('auth.register');
});

Route::post('/registeradmin', 'UserController@register');

Route::get('/home', function() {
	if(Session::has('id_user') && Session::has('name_user')){
        return view('home')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user')]);
    }
    return redirect('/loginadmin');
});

Route::get('/loginadmin', function () {
    return view('auth.login');
});

Route::post('/loginadmin', 'UserController@login');

Route::get('/logoutadmin', 'UserController@logout');

Route::group(['prefix'=>'products'], function(){
	Route::get('show', function() {
		if(Session::has('id_user') && Session::has('name_user')){
			$products = Product::all();
	        return view('products.show')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user'), 'products' => $products]);
	    }
	    return redirect('/loginadmin');
	});

	Route::get('create', function() {
		if(Session::has('id_user') && Session::has('name_user')){
	        return view('products.create')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user')]);
	    }
	    return redirect('/loginadmin');
	});

	Route::get('/{id}/edit', function($id) {
		if(Session::has('id_user') && Session::has('name_user')){
			$products = Product::where('id', $id)->get();
	        return view('products.edit')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user'), 'products' => $products]);
	    }
	    return redirect('/loginadmin');
	});

	Route::post('create', 'ProductController@create');

	Route::post('edit', 'ProductController@edit');

	Route::get('/{id}/delete', function($id) {
		if(Session::has('id_user') && Session::has('name_user')){
			Product::where('id', $id)->delete();
			$products = Product::all();
	        return redirect('products/show')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user'), 'products' => $products]);
	    }
	    return redirect('/loginadmin');
	});
});

Route::group(['prefix'=>'categorys'], function(){
	Route::get('show', function() {
		if(Session::has('id_user') && Session::has('name_user')){
			$categorys = Category::all();
	        return view('categorys.show')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user'), 'categorys' => $categorys]);
	    }
	    return redirect('/loginadmin');
	});

	Route::get('create', function() {
		if(Session::has('id_user') && Session::has('name_user')){
	        return view('categorys.create')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user')]);
	    }
	    return redirect('/loginadmin');
	});

	Route::get('/{id}/edit', function($id) {
		if(Session::has('id_user') && Session::has('name_user')){
			$categorys = Category::where('id', $id)->get();
	        return view('categorys.edit')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user'), 'categorys' => $categorys]);
	    }
	    return redirect('/loginadmin');
	});

	Route::post('create', 'CategoryController@create');

	Route::post('edit', 'CategoryController@edit');

	Route::get('/{id}/delete', function($id) {
		if(Session::has('id_user') && Session::has('name_user')){
			Category::where('id', $id)->delete();
			$categorys = Category::all();
	        return redirect('categorys/show')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user'), 'categorys' => $categorys]);
	    }
	    return redirect('/loginadmin');
	});
});