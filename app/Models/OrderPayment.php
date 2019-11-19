<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    //
    protected $table = 'order_payments';

    protected $fillable = [
        'total_amount', 'transaction_reference','payment_method','user_id','order_id'
    ];
}
