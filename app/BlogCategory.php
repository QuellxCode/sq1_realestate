<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    Protected $table = "blog_category";
    protected $fillable = [
        'blog_id','category_id'
    ];
    public $timestamps = false;

    public function category(){
        return $this->hasOne('App\Categories','id','category_id');
    }
    public function blog(){
        return $this->hasMany('App\Blog','id','blog_id');
    }
}
