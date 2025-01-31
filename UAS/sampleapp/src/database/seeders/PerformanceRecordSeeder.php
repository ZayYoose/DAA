<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PerformanceRecord;
use App\Models\Athlete;

class PerformanceRecordSeeder extends Seeder
{
    public function run(): void
    {
        $athletes = Athlete::all();

        foreach ($athletes as $athlete) {
            PerformanceRecord::create([
                'athlete_id' => $athlete->id,
                'record_date' => now(),
                'swimming_style' => 'Freestyle',
                'distance' => 100,
                'time_result' => '00:01:05',
                'heart_rate' => rand(120, 180),
                'vo2_max' => rand(40, 60),
                'coach_notes' => 'Performa cukup baik, perlu peningkatan pada teknik start.',
            ]);
        }
    }
}
