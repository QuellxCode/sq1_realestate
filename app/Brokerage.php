<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brokerage extends Model
{
    protected $table ="brokerage";

    protected $fillable = [
        'name','address','phone','photo'
    ];

    public $timestamps = false;
}
