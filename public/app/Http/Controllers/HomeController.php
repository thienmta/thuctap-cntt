<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "2";die;
        if(Session::has('id_user') && Session::has('name_user')){
            echo "string";die;
            return view('home');
        }
        return redirect('/loginadmin');
    }
}
