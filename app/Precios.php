<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precios extends Model
{
    protected $table = "articles";
    public $timestamps = "false";
    protected $fillable = array('price', 'updated_at', 'article');
}
