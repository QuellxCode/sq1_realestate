<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertieAgents extends Model
{
    protected $table="properties_agents";
    protected $fillable = [
        'properties_id', 'user_id'
    ];

    public $timestamps = false;

    public function agent(){
        return $this->hasMany('App\User','id','user_id');
    }

}
