<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Technical / Web Dev
            ['name' => 'Laravel', 'category' => 'Technical Skills', 'sort_order' => 1],
            ['name' => 'PHP', 'category' => 'Technical Skills', 'sort_order' => 2],
            ['name' => 'MySQL', 'category' => 'Technical Skills', 'sort_order' => 3],
            ['name' => 'SQL', 'category' => 'Technical Skills', 'sort_order' => 4],
            ['name' => 'HTML5', 'category' => 'Technical Skills', 'sort_order' => 5],
            ['name' => 'CSS', 'category' => 'Technical Skills', 'sort_order' => 6],
            ['name' => 'Bootstrap', 'category' => 'Technical Skills', 'sort_order' => 7],
            ['name' => 'Database Design', 'category' => 'Technical Skills', 'sort_order' => 8],

            // Tools & Design
            ['name' => 'UI/UX Design', 'category' => 'Tools & Design', 'sort_order' => 9],
            ['name' => 'Figma', 'category' => 'Tools & Design', 'sort_order' => 10],
            ['name' => 'Git', 'category' => 'Tools & Design', 'sort_order' => 11],
            ['name' => 'VS Code', 'category' => 'Tools & Design', 'sort_order' => 12],
            ['name' => 'Microsoft Excel', 'category' => 'Tools & Design', 'sort_order' => 13],

            // Methodology & Soft Skills
            ['name' => 'System Analyst', 'category' => 'Methodology', 'sort_order' => 14],
            ['name' => 'System Flowchart', 'category' => 'Methodology', 'sort_order' => 15],
            ['name' => 'Business Process Mapping', 'category' => 'Methodology', 'sort_order' => 16],
            ['name' => 'Problem Solving', 'category' => 'Soft Skills', 'sort_order' => 17],
            ['name' => 'Analytical Thinking', 'category' => 'Soft Skills', 'sort_order' => 18],
            ['name' => 'Teamwork', 'category' => 'Soft Skills', 'sort_order' => 19],
            ['name' => 'Adaptability', 'category' => 'Soft Skills', 'sort_order' => 20],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
