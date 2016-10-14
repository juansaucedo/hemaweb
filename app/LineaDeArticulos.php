<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaDeArticulos extends Model
{
    //
    protected $table = "article_lines";
    public $timestamps = "false";
    protected $fillable = array('name', 'created_at', 'updated_at');
}
