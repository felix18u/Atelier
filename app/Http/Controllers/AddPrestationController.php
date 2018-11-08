<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddPrestationController extends Controller
{
    public function index(Request $request, $presta) {
        $panier = DB::table('panier')->insert(
            ['id_coffret' => $request->coffrets, 'id_prestation' => $presta]
        );
       
        $message = "La prestation a bien été ajoutée a votre coffret";
        return view('catalog', compact('message'));
    }
}
