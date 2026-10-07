<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        SocialLink::create([
            'platform' => 'LinkedIn',
            'url' => 'https://linkedin.com/in/ryan-bagas-pratama',
            'icon' => 'bi bi-linkedin',
            'sort_order' => 1,
        ]);

        SocialLink::create([
            'platform' => 'GitHub',
            'url' => 'https://github.com/ryanbagas18',
            'icon' => 'bi bi-github',
            'sort_order' => 2,
        ]);

        SocialLink::create([
            'platform' => 'Email',
            'url' => 'https://mail.google.com/mail/?view=cm&fs=1&to=ryanbagaspratama18@gmail.com',
            'icon' => 'bi bi-envelope-fill',
            'sort_order' => 3,
        ]);
    }
}
