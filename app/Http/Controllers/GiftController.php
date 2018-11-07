<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiftController extends Controller
{
    
    function getData() 
    {
        $data = DB::table('prestation')->get();
        var_dump($data[0]->nom);
    }

}
