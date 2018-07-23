<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = "team_member";
    public $timestamps = false;

    public function users(){
        return $this->hasOne('App\User','id','user_id');
    }
}
