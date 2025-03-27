<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use SoftDeletes;
    protected $table = 'emails';
    protected $fillable = [
        'mail_subject',
        'mail_content',
        'user_id',
        'is_draft'
    ];
}
