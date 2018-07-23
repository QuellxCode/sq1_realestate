<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $table = "properties";
    protected $fillable = [
        'name','type','availiable','remarks','status','price','location','feature_photo','latitude','longitude'
    ];

    public $timestamps = false;

    public function properties()
    {
        return $this->belongsTo('App\ProjectProperties','properties_id');
    }
    public function photo()
    {
        return $this->hasMany('App\PropertiesPhotos','property_id');
    }
    public function detached()
    {
        return $this->hasOne('App\PropertyDetached','property_id');
    }
    public function semiDetached()
    {
        return $this->hasOne('App\PropertySemiDetached','property_id');
    }
    public function condo(){
        return $this->hasMany('App\PropertiesGroup','property_id');
    }
}
