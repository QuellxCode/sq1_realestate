<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    protected $fillable = [
        'project_id','name','address','mobile','property_name','area','unit_id','amount','description','remarks'
    ];

    public $timestamps = false;

    public function projects()
    {
        return $this->hasOne('App\Projects','id');
    }
    public function units()
    {
        return $this->hasOne('App\Units','id');
    }
}
