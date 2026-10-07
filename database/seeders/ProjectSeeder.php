<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $project1 = Project::create([
            'title' => 'Sistem Informasi Rekrutmen & Pelatihan UBAYA Choir',
            'slug' => 'sistem-informasi-rekrutmen-pelatihan-ubaya-choir',
            'company' => 'UBAYA Choir',
            'role' => 'Full Stack Developer',
            'description' => 'Aplikasi berbasis web untuk mengelola alur rekrutmen pendaftaran anggota baru, penjadwalan latihan, hingga pencatatan evaluasi nilai vokal trainee secara terpusat.',
            'meta_description' => 'Sistem Informasi Rekrutmen dan Pelatihan Anggota UBAYA Choir berbasis Laravel dan MySQL.',
            'github_url' => 'https://github.com/ryanbagaspratama/ubaya-choir-system',
            'featured' => true,
            'is_published' => true,
            'start_date' => '2025-05-01',
            'end_date' => '2026-01-01',
            'sort_order' => 1,
        ]);

        // Attach relasi skill ke project pivot
        $skills = Skill::whereIn('name', ['Laravel', 'MySQL', 'PHP', 'Bootstrap'])->pluck('id');
        $project1->skills()->attach($skills);
    }
}
