<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogType extends Model
{
    //

    protected $table = 'logtype';

    protected $fillable = [
        'name', 'description'
    ];
}
