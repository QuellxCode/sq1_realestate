<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    protected $table = "agents";
    protected $fillable = [
        'user_id','name','address','phone','status'
    ];

    public $timestamps = false;
}
