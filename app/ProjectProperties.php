<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectProperties extends Model
{
    protected $table = "project_properties";
    public $timestamps = false;

    public function projects(){
        return $this->hasOne('App\Projects','id','project_id');
    }
    public function properties(){
        return $this->hasOne('App\Properties','id','properties_id');
    }
}
