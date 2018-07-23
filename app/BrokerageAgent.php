<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrokerageAgent extends Model
{
    protected $table = "brokerage_agent";
    protected $fillable = [
        'brokerage_id','user_id'
    ];

    public $timestamps = false;
    public function brokerage(){
        return $this->hasOne('App\Brokerage','id','brokerage_id');
    }
}
