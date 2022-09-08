<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Traits\LastestTrait;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 36
        Order::create([
            'total' => 36.0,
            'user_id' => 406,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
        // // 32
        // Order::create([
        //     'total' => 520.0,
        //     'user_id' => 390,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);
        // // 33
        // Order::create([
        //     'total' => 320.0,
        //     'user_id' => 409,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);

        // // 1
        // Order::create([
        //     'total' => 320.0,
        //     'user_id' => 331,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);
        // // 2
        // Order::create([
        //     'total' => 420.0,
        //     'user_id' => 394,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);
        // // 3
        // Order::create([
        //     'total' => 620.0,
        //     'user_id' => 380,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);
        // // 4
        // Order::create([
        //     'total' => 720.0,
        //     'user_id' => 402,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);
        // // 5
        // Order::create([
        //     'total' => 420.0,
        //     'user_id' => 400,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);
        // // 6
        // Order::create([
        //     'total' => 300.0,
        //     'user_id' => 331,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);
        // // 7
        // Order::create([
        //     'total' => 340.0,
        //     'user_id' => 397,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ]);
    }
}
