<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

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
        return view('catalog', compact('gifts'));
    }

    function getData() 
    {
        $data = DB::table('prestation')->get();
    }

    function getDataCroissant(){
        $gifts = DB::table('prestation')->orderBy('prix','asc')->get();
        return view('catalog', compact('gifts'));
    }

    function getDataDecroissant(){
        $gifts = DB::table('prestation')->orderBy('prix','desc')->get();
        return view('catalog', compact('gifts'));
    }

}
