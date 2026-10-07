<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


    protected $fillable = [
        'name',
        'headline',
        'bio',
        'email',
        'phone',
        'location',
        'photo_path',
        'resume_path',
    ];
}
