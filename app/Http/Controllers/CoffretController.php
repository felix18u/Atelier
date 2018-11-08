<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $request,$cof_id)
    {
        $coffret = DB::table('coffret')->where('users_id',"=",$request->user()->id)->where('id',"=",$cof_id)->get();
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
        
        return CoffretController::afficher($request->input('id'));
    }

    public function delete($id_coffret, $id_prestation){
        $box = DB::table('coffret')
        ->where('id', $id_coffret)->get();

        $presta = DB::table('prestation')
        ->where('id', $id_prestation)->get();

        $panier = DB::table('panier')
        ->where('id_coffret', $id_coffret)
        ->where('id_prestation', $id_prestation)->delete();

        $priceGift = $presta[0]->prix;
        $priceBox = $box[0]->montantTotal;
        $total = $priceBox - $priceGift;

        DB::table('coffret')
        ->where('id', $id_coffret)
        ->update(['montantTotal' => $total]);

        return CoffretController::afficher($id_coffret);
    }

    public function coffretValidate($id_coffret){
        $box = DB::table('coffret')
        ->where('id', $id_coffret)->get();

        $panier = DB::table('panier')
        ->where('id_coffret', $id_coffret);
        

      /* if(count($panier->id_prestation)>=2){
           $diffCat = false;
            $presta = DB::table('prestation')
            ->where('id', $id_prestation)->get();
            for($i=1;$i<=count($presta->cat_id);$i++){
                if($presta[$i-1]->cat_id != $presta[$i]->cat_id){
                    $diffCat= true;
                    break;
                }
            }
            if($diffCat){ */
                return view('coffretValidate', compact('box'));
            /* }
            else{
                return view('coffret', compact('box'));
            }
        }*/

    }

    public function coffretValidatePost(Request $request){
    
        DB::table('coffret')
        ->where('id', $request->input('id'))
        ->update(['nom' => $request->input('nom'),
        'etat' => 'En attente de paiement',
        'message' => $request->input('message'),]);

        $box = DB::table('coffret')
        ->where('id', '=',  $request->input('id'))->get();
        
        if($request->input('paiement_id') == 0){
            DB::table('paiement')
            ->where('id', $box[0]->paiement_id)
            ->update(['type' => $request->input('paiement_id'),]);
        }
       
        /* Génération de l'url */
        $nomcoffret = DB::table('coffret')
        ->where('id', $request->id)
        ->select('nom')->get();
        $url = '/ouvrirCoffret/'.sha1(''.Auth::user()->nom.$request->id.$nomcoffret[0]->nom);
        DB::table('coffret')
        ->where('id', $request->id)
        ->update(['url' => $url]);

        return view('coffretValidate', compact('box'));
    }
}
