<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $table = "leads";
    protected $fillable = [
        'property_id','name','address','email','phone','date_of_birth'
    ];
    public $timestamps = false;

}
