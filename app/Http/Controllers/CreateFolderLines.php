<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use File;

class CreateFolderLines extends Controller
{
    public function __invoke(){
        $lineas = \App\LineaDeArticulos::all();
        $error = "";
        foreach($lineas as $linea){
            if(File::makeDirectory(public_path().'/assets/content/lineas/'.$linea['id'])){
                $error.="Creado ".$linea['id']."<br>";
            }
            else{
                $error.="Error en ".$linea['id']."<br>";
            }
        }
    }
}
