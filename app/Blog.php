<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    Protected $table = "blog";
    protected $fillable = [
        'title','post','feature_image','video','author'
    ];
}
