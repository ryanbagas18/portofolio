<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    

    protected $fillable = [
        'role',
        'organization',
        'employment_type',
        'start_date',
        'end_date',
        'is_current',
        'location',
        'description',
        'sort_order',
    ];
}
