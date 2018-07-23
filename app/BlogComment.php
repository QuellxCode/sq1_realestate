<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    Protected $table = "blog_comment";
    protected $fillable = [
        'blog_id','name','email','message'
    ];
    public $timestamps = false;
}
