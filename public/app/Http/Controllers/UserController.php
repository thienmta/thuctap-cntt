<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function login (Request $request) {
    	$email = $request->input('email');
    	$password = $request->input('password');
    	$user = User::where('email', $email)->where('password', $password)->get();
    	if (count($user) == 1) {
    		Session::put('id_user',$user[0]->id);
			Session::put('name_user',$user[0]->name);
			return redirect('/home');
    	}
    	return redirect('/loginadmin');
    }

    public function logout () {
    	if(Session::has('id_user') && Session::has('name_user')){
	        Session::forget('id_user');
		    Session::forget('name_user');

		    return redirect('/loginadmin');
	    }
	    else{
	        return redirect('/loginadmin');
	    }
    }
}
