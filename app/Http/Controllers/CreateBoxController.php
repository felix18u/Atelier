<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateBoxController extends Controller
{
    public function index()
    {
        return view('createBox');
    }

    public function addBox(Request $request)
    {
        /*DB::table('paiement')->insert([
            ['coffret_id' => ]
        ])*/
        DB::table('coffret')->insert([
            ['nom' => $request->input('name'), 'date' => $request->input('date'), 'etat' => "En cours de création",'montantTotal' => 0 , 'message' => $request->input('message'), 'remerciement' => "", 'url' => "", 'users_id' => Auth::user()->id->get()]
        ]);
        return view('profile');
    }
}
