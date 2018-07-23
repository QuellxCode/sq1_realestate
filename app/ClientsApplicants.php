<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsApplicants extends Model
{
    protected $table = "clients_coapplicants";
    protected $fillable = [
        'user_id','client_id','phone','father_name','address','district','district',
        'state','pincode','nationality','pan','dob','occupation','status','photo','id_proof','address_proof'
    ];
    public $timestamps = false;
    public function users(){
        return $this->hasOne('App\User','id','user_id');
    }
}
