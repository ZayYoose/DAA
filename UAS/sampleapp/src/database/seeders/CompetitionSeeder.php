<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competition;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Competition::create([
            'name' => 'Kejuaraan Nasional Renang 2025',
            'location' => 'Jakarta, Indonesia',
            'date' => '2025-06-15',
            'category' => 'Nasional'
        ]);

        Competition::create([
            'name' => 'Aqua Champion Invitational',
            'location' => 'Surabaya, Indonesia',
            'date' => '2025-09-10',
            'category' => 'Regional'
        ]);

        Competition::create([
            'name' => 'Asian Swimming Championship',
            'location' => 'Tokyo, Jepang',
            'date' => '2025-11-20',
            'category' => 'Internasional'
        ]);
    }
}
