<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationMessage extends Model
{
    //

    protected $table = 'notification_messages';

    protected $fillable = [
        'slug', 'message','action_text','action_url','subject'
    ];
}
