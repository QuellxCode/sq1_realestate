<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    protected $table = "currencies";
    protected $fillable = [
        'name','short',
    ];
    public $timestamps = false;
}
