<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $table = "taxes";
    protected $fillable = [
        'name','percent'
    ];

    public $timestamps = false;

}
