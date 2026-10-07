<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Certification;
use App\Models\Achievement;
use App\Models\Project;
use App\Models\SocialLink;

class HomeController extends Controller
{
    public function index()
    {
        return view('portofolio.index', [
            'profile' => Profile::first(),
            'educations' => Education::orderBy('sort_order')->get(),
            'experiences' => Experience::orderBy('sort_order')->get(),
            'skills' => Skill::orderBy('sort_order')->get()->groupBy('category'),
            'certifications' => Certification::orderBy('sort_order')->get(),
            'achievements' => Achievement::orderBy('sort_order')->get(),
            'projects' => Project::with('skills')
                ->where('is_published', true)
                ->orderBy('sort_order')
                ->get(),
            'socialLinks' => SocialLink::orderBy('sort_order')->get(),
        ]);
    }
}
