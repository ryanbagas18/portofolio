<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function about()
    {
        $profile = Profile::first();

        return view('sections/about', compact('profile'));
    }
}