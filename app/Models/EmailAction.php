<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailAction extends Model
{
    protected $fillable = [
        'mail_id',
        'user_id',
        'is_sent',
        'is_read',
        'is_important',
        'is_starred',
        'is_archive'
    ];
}
