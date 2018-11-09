<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OpenCoffretController extends Controller
{
    public function index($sha1) {
        $box = DB::table('coffret')
        ->where('url', '=',  url('/ouvrirCoffret/'.$sha1))
        ->get();
        
        if(count($box) != 0) {
            $prestas = [];
            $panier = DB::table('panier')
            ->where('id_coffret', $box[0]->id)->get();
            for($i = 0; $i < count($panier); $i++){
                $prestas[] = DB::table('prestation')
                ->where('id', $panier[$i]->id_prestation)->get();
            }
            return view('opencoffret', ['url' => url('/ouvrirCoffret/'.$sha1), 'prestas' => $prestas, 'nom' => $box[0]->nom, 'message' => $box[0]->message]);
        } else { return view('opencoffret', ['fail' => true]); }
        
    }

    public function confirm($sha1) {
        $box = DB::table('coffret')
        ->where('url', '=',  url('/ouvrirCoffret/'.$sha1))
        ->get();
        
        if(count($box) != 0) {
            $prestas = [];
            $panier = DB::table('panier')
            ->where('id_coffret', $box[0]->id)->get();
            DB::table('coffret')
            ->where('id', $box[0]->id)
            ->update(['etat' => 'Coffre ouvert']);
            for($i = 0; $i < count($panier); $i++){
                $prestas[] = DB::table('prestation')
                ->where('id', $panier[$i]->id_prestation)->get();
            }
            return view('opencoffret', ['url' => url('/ouvrirCoffret/'.$sha1), 'prestas' => $prestas, 'nom' => $box[0]->nom, 'message' => $box[0]->message, 'confirm' => true]);
        } else { return view('opencoffret', ['fail' => true]); }
    }

    public function message(Request $request, $sha1) {
        $box = DB::table('coffret')
        ->where('url', '=',  url('/ouvrirCoffret/'.$sha1))
        ->get();

        DB::table('coffret')
        ->where('id', $box[0]->id)
        ->update(['etat' => 'Message recu', 'remerciement' => $request->message]);

        return view('messageconfirm');
    }
}
