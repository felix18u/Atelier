<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $gifts = DB::table('prestation')->get();
        if(auth::check()){
            $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
        } else {
            $boxes = "";
        }
        return view('catalog', compact('gifts'), compact('boxes'));
    }

    public function indexByCat($cat_id)
    {   
        $gifts = DB::table('prestation')->where('cat_id',$cat_id)->get();
        $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
        return view('catalog', compact('gifts'), compact('boxes'));
    }



}
