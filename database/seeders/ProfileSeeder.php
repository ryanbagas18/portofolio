<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Ryan Bagas Pratama',
            'headline' => 'Web & Full-Stack Developer | Informatics Engineering',
            'bio' => 'Lulusan S1 Sistem Informasi Universitas Surabaya dengan fokus pada pengembangan web, analisis sistem, dan perancangan proses bisnis. Memiliki pengalaman membangun aplikasi web dengan Laravel & MySQL, serta merancang UI/UX menggunakan Figma. Berkelanjutan mengasah kemampuan kepemimpinan dan manajemen tim melalui pengalaman sebagai Trainer UBAYA Choir dan Panitia FESPA UBAYA.',
            'email' => 'ryanbagaspratama18@gmail.com',
            'phone' => '',
            'location' => 'Surabaya, Jawa Timur, Indonesia',
            'photo_path' => 'images/profile.jpg',
            'resume_path' => 'files/CV_ATS_RYAN_BAGAS_PRATAMA.pdf',
        ]);
    }
}
