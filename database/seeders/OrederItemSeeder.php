<?php

namespace Database\Seeders;
use App\Models\Order_item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrederItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            // -----------------------------------
        // 35
        // 1
        Order_item::create([
            'unit' => 'كيلو',
            'price' => 5,
            'quantity' => 4,
            'order_id'=> 1,
            'product_id' => 6
            ]);
        // 2
        Order_item::create([
            'unit' => 'حبه',
            'price' => 2,
            'quantity' => 4,
            'order_id'=> 1,
            'product_id' => 3
            ]);
        // 3
        Order_item::create([
            'unit' => 'كرتون',
            'price' => 2,
            'quantity' => 4,
            'order_id'=> 2,
            'product_id' => 5
            ]);
        // 4
        Order_item::create([
            'unit' => 'جرام',
            'price' => 2,
            'quantity' => 4,
            'order_id'=> 1,
            'product_id' => 4
            ]);
        // 5
        Order_item::create([
            'unit' => 'باكت',
            'price' => 13,
            'quantity' => 44,
            'order_id'=> 1,
            'product_id' => 4
            ]);
        // 6
        Order_item::create([
            'unit' => 'كيس',
            'price' => 20,
            'quantity' => 4,
            'order_id'=> 1,
            'product_id' => 3
            ]);
        // 7
        Order_item::create([
            'unit' => 'شده',
            'price' => 12,
            'quantity' => 4,
            'order_id'=> 3,
            'product_id' => 15
            ]);
        // 8
        Order_item::create([
            'unit' => 'درزن',
            'price' => 12,
            'quantity' => 4,
            'order_id'=> 6,
            'product_id' => 12
            ]);
        // 9
        Order_item::create([
            'unit' => 'متر',
            'price' => 14,
            'quantity' => 4,
            'order_id'=> 7,
            'product_id' => 12
            ]);
        // 10
        Order_item::create([
            'unit' => 'لتر',
            'price' => 23,
            'quantity' => 4,
            'order_id'=> 1,
            'product_id' => 13
            ]);
        // 11
        Order_item::create([
            'unit' => 'ملي',
            'price' => 21,
            'quantity' => 4,
            'order_id'=> 1,
            'product_id' => 14
            ]);
             // 12
        Order_item::create([
            'unit' => 'ملي',
            'price' => 21,
            'quantity' => 4,
            'order_id'=> 5,
            'product_id' => 15
            ]);
             // 13
        Order_item::create([
            'unit' => 'ملي',
            'price' => 21,
            'quantity' => 4,
            'order_id'=> 5,
            'product_id' => 16
            ]);
             // 12
        Order_item::create([
            'unit' => 'ملي',
            'price' => 21,
            'quantity' => 4,
            'order_id'=> 2,
            'product_id' => 17
            ]);
    }
}
