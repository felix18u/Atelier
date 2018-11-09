<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiftController extends Controller
{
    
    function index($id){
        $gifts = DB::table('prestation')->where('id',$id)->get();
        $cat = DB::table('categorie')->where('id', $gifts[0]->cat_id)->get();
        
        return view('gift', compact('gifts'), compact('cat'));
    }

    function wp($id) {
        $gifts = DB::table('prestation')->where('id',$id)->get();
        $cat = DB::table('categorie')->where('id', $gifts[0]->cat_id)->get();
        
        return view('gift', ['gifts' => $gifts, 'cat' => $cat, 'wp' => true]);
    }

}
