<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupFields extends Model
{
    protected $table = "group_fields";
    protected $fillable = [
        'group_id','model','sqft','floors','price_from','features'
    ];

    public $timestamps = false;
    public function models(){
        return $this->hasMany('App\CondoGroupGallery','model_id');
    }
}
