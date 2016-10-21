<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $table = "articles";
    public $timestamps = "false";
    protected $fillable = array('name', 'created_at', 'updated_at', 'status', 'description', 'line');
}
