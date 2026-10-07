<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProfileSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            SkillSeeder::class,
            CertificationSeeder::class,
            AchievementSeeder::class,
            ProjectSeeder::class,
            SocialLinkSeeder::class,
        ]);
    }
}
