<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function show($slug)
    {
        // Mencari project berdasarkan slug, relasikan dengan skills-nya
        $project = Project::with('skills')
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('portofolio.show', [
            'project' => $project,
        ]);
    }
}
