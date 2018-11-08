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
       
        return view('coffret', compact('box'), compact('prestas'));
    }

    public function modifier(Request $request){
        DB::table('coffret')
        ->where('id', $request->input('id'))
        ->update(['message' => $request->input('message')]);

        DB::table('coffret')
        ->where('id', $request->input('id'))
        ->update(['date' => $request->input('date')]);
        
        //$id =  afficher($request->input('id'));

        return CoffretController::afficher($request->input('id'));
    }
}
