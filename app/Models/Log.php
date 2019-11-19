<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //

    protected $table = 'logs';

    protected $fillable = [
        'log_type', 'details', 'user_id'
    ];
}
