<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 894d36a37d47243a6196430b84f58963420d17c1

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
    public function index(Request $request)
    {
        $coffret = DB::table('coffret')->where('id',"=",$request->user()->id)->get();
        return view('coffret',compact('coffret'));
    }

    public function afficher($id_coffret){
        $box = DB::table('coffret')
        ->where('id', '=',  $id_coffret)->get();
        
        $panier = DB::table('panier')
        ->where('id_coffret', $id_coffret)->get();
        for($i = 0; $i < count($panier); $i++){
            $prestas[] = DB::table('prestation')
            ->where('id', $panier[$i]->id_prestation)->get();
        }
        /*$prestas = DB::table('prestation')
        ->where('id', $panier->id_prestation)->get();*/
        
        return view('coffret', compact('box'), compact('prestas'));
    }
}
