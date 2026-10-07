<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'is_read',
    ];
}
