<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Athlete;

class AthleteSeeder extends Seeder {
    public function run() {
        Athlete::create([
            'name' => 'Rizky Wijaya',
            'age' => 18,
            'height' => 175,
            'weight' => 68,
            'training_level' => 'Advanced'
        ]);

        Athlete::create([
            'name' => 'Dinda Sari',
            'age' => 17,
            'height' => 170,
            'weight' => 60,
            'training_level' => 'Intermediate'
        ]);
    }
}
