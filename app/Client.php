<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";
    public $timestamps = false;
    protected $fillable = [
        'holder_id','user_id','phone','father_name','address','district','district',
        'state','pincode','nationality','pan','dob','occupation','status','photo','id_proof','address_proof'
    ];

    public function users(){
        return $this->hasOne('App\User','id','user_id');
    }

}
