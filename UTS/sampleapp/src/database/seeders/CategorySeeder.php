<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Menambahkan kategori dummy
        Category::create([
            'name' => 'Electronics',
        ]);
    }
}
