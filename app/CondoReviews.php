<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CondoReviews extends Model
{
    protected $table = "condo_reviews";
    protected $fillable = [
        'name','address','no_of_floors','maintenance_fees','no_of_units','property_manage_contact',
'latitude','longitude','security_contact','leasing_contact','buying_contact','building_amenities','pets','corporation_no','description'
    ];
    public $timestamps = false;
}
