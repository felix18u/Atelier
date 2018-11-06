<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthentificatesUsers;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        return view('profile');
    }

 
    public function store(Request $request)
    {
        DB::table('users')
        ->where('id', $request->input('id'))
        ->update(['name' => $request->input('name')])
        ->update(['email' => $request->input('email')]);   
     }
}
