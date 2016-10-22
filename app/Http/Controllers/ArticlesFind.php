<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class ArticlesFind extends Controller
{
    //
    private $limit = 30;
    
    public function byLine($idLine, $currentPag){
        $articles = \App\Articulos::where('line',$idLine)->where('status','A')->limit($this->limit)->offset(($currentPag - 1)*$this->limit)->get();
        foreach($articles as $article){
            $article['price'] = $this->highCost(\App\Precios::where('article',$article['id']));
        }
        $pags = ceil((\App\Articulos::where('line',$idLine)->where('status','A')->count()) / $this->limit);
        if($articles->count() < $this->limit)
            $this->limit = $articles->count();
        return view('productos', ["articles" => $articles, "pags" => $pags, "currentPag" => $currentPag, "limit" => $this->limit, "articles" => $articles, "idLine" => $idLine]);
    }

    private function getArticlesData($articles, $idLine, $currentPag){
        
    }
    private function highCost($prices){
        $max = 0;
        foreach($prices as $price){
            if($price['price'] > $max){
                $max = $price['price'];
            }
        }
        return $max;
    }
}
