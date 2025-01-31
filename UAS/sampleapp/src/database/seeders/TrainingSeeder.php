<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Training;
use App\Models\Athlete;

class TrainingSeeder extends Seeder
{
    public function run(): void
    {
        $athletes = Athlete::all();

        foreach ($athletes as $athlete) {
            Training::create([
                'athlete_id' => $athlete->id,
                'training_date' => now(),
                'training_level' => 'Advanced',
                'training_type' => 'Kecepatan',
                'duration' => rand(60, 120),
                'coach_notes' => 'Latihan berjalan baik, perlu fokus pada teknik pembalikan.',
            ]);
        }
    }
}
