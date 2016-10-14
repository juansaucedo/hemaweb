<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Welcome extends Controller
{
    //
    public function __invoke(){
        $lineas = \App\LineaDeArticulos::all();
        $colLineas = 4;
        return view ('welcome', ["lineas" => $lineas, "colLineas" => $colLineas]);
    }
}
