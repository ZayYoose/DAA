<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HealthRecord;
use App\Models\Athlete;
use Carbon\Carbon;

class HealthRecordSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        $athletes = Athlete::all();

        if ($athletes->isEmpty()) {
            $this->command->info('Tidak ada atlet yang ditemukan. Pastikan tabel atlet sudah terisi.');
            return;
        }

        $healthRecords = [
            [
                'blood_pressure' => '120/80',
                'heart_rate' => 72,
                'injury_history' => 'Tidak ada',
                'recovery_plan' => 'Latihan ringan & stretching',
                'nutrition_plan' => 'Pola makan tinggi protein & hidrasi cukup',
            ],
            [
                'blood_pressure' => '110/75',
                'heart_rate' => 68,
                'injury_history' => 'Cedera bahu ringan',
                'recovery_plan' => 'Fisioterapi selama 2 minggu',
                'nutrition_plan' => 'Asupan kalori ditingkatkan untuk pemulihan',
            ],
            [
                'blood_pressure' => '125/85',
                'heart_rate' => 80,
                'injury_history' => 'Cedera pergelangan kaki',
                'recovery_plan' => 'Pemulihan 4 minggu & latihan tanpa beban kaki',
                'nutrition_plan' => 'Dukungan vitamin D & kalsium untuk tulang',
            ],
        ];

        foreach ($athletes as $athlete) {
            $record = $healthRecords[array_rand($healthRecords)];

            HealthRecord::create([
                'athlete_id' => $athlete->id,
                'blood_pressure' => $record['blood_pressure'],
                'heart_rate' => $record['heart_rate'],
                'injury_history' => $record['injury_history'],
                'recovery_plan' => $record['recovery_plan'],
                'nutrition_plan' => $record['nutrition_plan'],
                'checkup_date' => Carbon::now()->subDays(rand(1, 30)),
            ]);
        }
    }
}
