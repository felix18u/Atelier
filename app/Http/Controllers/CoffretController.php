<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoffretController extends Controller
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
    public function index(Request $request,$cof_id)
    {
        $coffret = DB::table('coffret')->where('users_id',"=",$request->user()->id)->where('id',"=",$cof_id)->get();
        return view('coffret',compact('coffret'));
    }

    /** public function putPresta(Request $request, $presta){*/
}
