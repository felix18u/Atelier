<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function indexByCat($cat_id)
    {   
        $gifts = DB::table('prestation')->where('cat_id',$cat_id)->get();
        return view('catalog', compact('gifts'));
    }

}
