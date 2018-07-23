<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchasePayments extends Model
{
    protected $table = "purchases_payments";
    protected $fillable = [
        'purchase_id','paymenttype_id','amount','date','remarks'
    ];

    public $timestamps = false;

}
