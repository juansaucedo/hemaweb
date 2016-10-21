<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use File;

class CreateFolderArticles extends Controller
{
    public function __invoke(){
        $articulos = \App\Articulos::all();
        $error = "";
        foreach($articulos as $articulo){
            if(File::makeDirectory(public_path().'/assets/content/productos/'.$articulo['id'])){
                $error.="Creado ".$articulo['id']."<br>";
            }
            else{
                $error.="Error en ".$articulo['id']."<br>";
            }
        }
    }
}
