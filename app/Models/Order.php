<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $table = 'orders';

    protected $fillable = [
        'total_amount', 'no_of_items','status','to_be_delivered','delivery_address','user_id'
    ];
}
