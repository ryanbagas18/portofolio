<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'company',
        'role',
        'description',
        'image_path',
        'github_url',
        'demo_url',
        'featured',
        'start_date',
        'end_date',
        'sort_order',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
