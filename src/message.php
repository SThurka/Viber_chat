<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $fillable = [
        'subscriber_id', 'subscriber_name'
    ];
}
