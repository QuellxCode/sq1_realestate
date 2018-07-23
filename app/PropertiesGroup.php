<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertiesGroup extends Model
{
    protected $table = "properties_group";
    public $timestamps = false;
    protected $fillable = [
        'properties_id','name'
    ];

    public function condo($id)
    {
        return $this->hasMany('App\GroupFields','group_id')->where('group_id',$id)->first();
    }
    public function property(){
        return $this->hasOne('App\Properties','id','properties_id');
    }
    public function groupFields(){
        return $this->hasMany('App\GroupFields','group_id','id');
    }
}
