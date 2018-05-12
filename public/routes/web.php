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
			$products = Product::all();
	        return view('products.create')->with(['id' => Session::get('id_user'), 'name' => Session::get('name_user')]);
	    }
	    return redirect('/loginadmin');
	});

	Route::post('create', 'ProductController@create');
	Route::post('edit', 'KhachhangController@Dangnhap');
	Route::get('dang-xuat', function(){
		if(Session::has('id_khachhang') && Session::has('hoten_khachhang')){
	        Session::forget('id_khachhang');
		    Session::forget('hoten_khachhang');
		    
		    return redirect('khach-hang-dang-nhap');
	    }
	    else{
	        return redirect('khach-hang-dang-nhap');
	    }
	});
});