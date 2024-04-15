<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EducationLevel;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the education levels
        $educationLevels = ['10th', '12th', 'Bachelor\'s', 'Masters', 'Diploma'];

        // Insert each education level into the database
        foreach ($educationLevels as $level) {
            EducationLevel::create(['level' => $level]);
        }
    }
}
