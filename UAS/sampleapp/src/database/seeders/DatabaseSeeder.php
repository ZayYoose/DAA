<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AthleteSeeder::class,
            CompetitionSeeder::class,
            HealthRecordSeeder::class,
            PerformanceRecordSeeder::class,
            PerformanceRecordSeeder::class,
            TrainingSeeder::class,
        ]);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $user->assignRole('super_admin');
    }
}
