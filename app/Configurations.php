<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configurations extends Model
{
    protected $table = "configurations";

    protected $fillable = [
        'name','organization_name','domain_name','email','meta_title','meta_desc','timezone','contact','currency','date_format','address','account_details','due_days','late_fees','language','dir_type','about_website'
    ];

    public $timestamps = false;
}
