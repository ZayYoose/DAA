<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'CR 401',
            'CR 402',
            'CR 403',
            'CR 404',
            'CR 405',
            'CR 406',
            'CR 407',
            'CR 408',
            'CR 409',
            'CR 410',
        ];
        
        foreach ($data as $classroomName) { 
            Classroom::firstOrCreate(
                ['name' => $classroomName]
            );
        }
    }
}
