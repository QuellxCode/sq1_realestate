<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'category_id', 'name', 'city', 'state', 'address', 'nearest_location', 'reach', 'purchase', 'description', 'to_date', 'from_date'
    ];

    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo('App\ProjectProperties','project_id');
    }
}