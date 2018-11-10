<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\JsonRequest;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function index(){
        $gifts = DB::table('prestation')->get();
        return view('admin.admin',compact('gifts'));
    }

    function showAddGift(){
        return view('admin.addGift');
    }

    function addGift(Request $request){
        $img = $request->image;
        $img->storeAs('public/img/', $request->image->getClientOriginalName());

        DB::table('prestation')->insert([
            ['nom' => $request->input('name'),
            'descr' => $request->input('descr'),
            'cat_id' => $request->input('category'),
            'img' =>  $request->image->getClientOriginalName(),
            'prix' => $request->input('price'),
            'actif' => $request->input('active')]
        ]);

        return redirect('admin');
    }

    function changeActive(Request $request){

        DB::table('prestation')
        ->where('id', $request->input('id'))
        ->update(['actif' => !$request->input('active')]);
        
        return redirect('admin');
    }

    function deleteGift(Request $request){

        DB::table('prestation')
        ->where('id', $request->input('id'))
        ->delete();

        return redirect('admin');
    }

}