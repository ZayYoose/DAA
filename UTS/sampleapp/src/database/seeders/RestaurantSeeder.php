<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        Restaurant::create([
            'name' => 'Pizza Hut',
            'location' => 'New York',
            'rating' => 4.5,
            'cuisine_type' => 'Italian',
            'menu_items' => json_encode(['Pizza', 'Pasta', 'Salad']),
        ]);
    }
}
