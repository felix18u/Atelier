<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiftController extends Controller
{
    
    function index($id){
        $gifts = DB::table('prestation')->where('id',$id)->get();
        return view('gift', compact('gifts'));
    }

}
