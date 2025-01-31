<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::create([
            'name' => 'Pepperoni Pizza',
            'price' => 9.99,
            'restaurant_id' => 1,
        ]);
    }
}
