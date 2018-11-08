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
        $gifts = DB::table('prestation')->get();
        if(auth::check()){
            $boxes = DB::table('coffret')->where( 'users_id', Auth::user()->id )->get();
        } else {
            $boxes = "";
        }
        return view('catalog', compact('gifts'), compact('boxes'));
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

    public function addPresta(Request $request) {
        DB::table('panier')->insert(
            ['id_coffret' => $request->coffrets, 'id_prestation' => $request->presta]
        );
        $prixbox = DB::table('coffret')
            ->where('id', '=',  $request->coffrets)
            ->select('montantTotal')->get();
        $prixpresta = DB::table('prestation')
            ->where('id', '=',  $request->presta)
            ->select('prix')->get();
        DB::table('coffret')->where('id', '=',  $request->coffrets)->update(
            ['montantTotal' => $prixbox[0]->montantTotal + $prixpresta[0]->prix]
        );
       
        $message = "La prestation a bien été ajoutée a votre coffret";
        return CatalogController::index('all');
    }

}
