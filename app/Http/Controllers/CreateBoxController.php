<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CreateBoxController extends Controller
{
    public function index()
    {
        return view('createBox');
    }

    /*Fonction permettant à un utilisateur de créer un nouveau coffret*/
    public function addBox(Request $request)
    {
        DB::table('paiement')->insert([
            ['type' => 1, 'etat' => 0]
        ]);

        DB::table('coffret')->insert([
            ['nom' => $request->input('name'), 'date' => $request->input('date'), 'etat' => "En cours de création",'montantTotal' => 0 , 'message' => $request->input('message'), 'remerciement' => "", 'url' => "", 'paiement_id' => 1, 'users_id' => Auth::user()->id]
        ]);

        $coffrets = DB::table('coffret')
        ->where('users_id',  Auth::user()->id)->get();
        
        DB::table('coffret')
        ->where('id', $coffrets[count($coffrets)-1]->id)
        ->update(['paiement_id' => $coffrets[count($coffrets)-1]->id]); 
        
        return redirect(url('/profile'));
    }
}
