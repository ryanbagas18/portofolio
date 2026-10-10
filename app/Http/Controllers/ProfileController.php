<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\SocialLink; // Tambahkan ini
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function about()
    {
        $profile = Profile::first();

        return view('sections.about', compact('profile'));
    }
}