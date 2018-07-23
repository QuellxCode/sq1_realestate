<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $table ="navbar";
    protected $fillable = [
        'name','link'
    ];
    public $timestamps = false;
}
