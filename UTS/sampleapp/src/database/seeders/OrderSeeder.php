<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data order dummy
        Order::create([
            'user_id' => 1,
            'total_price' => 99.99,
            'status' => 'pending',
        ]);
    }
}
