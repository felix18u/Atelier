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
    public function index($type=null)
    {   
        if($type==null){
            $gifts = DB::table('prestation')->get();
            if(Auth::check()){
            $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
            } else {
                $boxes = "";
            }
            return view('catalog', compact('gifts'), compact('boxes'));
        }
        else if($type=='croissant'){
            $gifts = DB::table('prestation')->orderBy('prix','asc')->get();
            if(Auth::check()){
            $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
            } else {
                $boxes = "";
            }
            return view('catalog', compact('gifts'),compact('boxes'));  
        }
        else if($type == 'decroissant'){
            $gifts = DB::table('prestation')->orderBy('prix','desc')->get();
            if(Auth::check()){
            $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
            } else {
                $boxes = "";
            }
            return view('catalog', compact('gifts'),compact('boxes'));
        }
    }

    public function indexByCat($cat_id,$type=null)
    {  
        if($type==null){
            $gifts = DB::table('prestation')->where('cat_id',$cat_id)->get();
            if(Auth::check()){
                $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
            } else {
                $boxes = "";
            }
            return view('catalog', compact('gifts'), compact('boxes'));
        }
        else if($type=='croissant'){
            $gifts = DB::table('prestation')->where('cat_id',$cat_id)->orderBy('prix','asc')->get();
            if(Auth::check()){
            $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
            } else {
                $boxes = "";
            }
            return view('catalog', compact('gifts'),compact('boxes'));  
        }
        else if($type == 'decroissant'){
            $gifts = DB::table('prestation')->where('cat_id',$cat_id)->orderBy('prix','desc')->get();
            if(Auth::check()){
            $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
            } else {
                $boxes = "";
            }
            return view('catalog', compact('gifts'),compact('boxes'));
        }
    }

}
