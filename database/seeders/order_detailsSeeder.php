<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class order_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'order_id' => '1',
                'product_id' => '1',
                'price' => '320000',
                'quantity' => '2',
                'size' => 'XL',
                'discount' => '0.00',
                'total' => '640000',
                'payment_name' => 'Thanh toán khi nhận hàng'
            ],
            [
                'order_id' => '1',
                'product_id' => '2',
                'price' => '600000',
                'quantity' => '1',
                'size' => 'XXL',
                'discount' => '0.00',
                'total' => '600000',
                'payment_name' => 'Thanh toán khi nhận hàng'
            ],
            [
                'order_id' => '2',
                'product_id' => '3',
                'price' => '420000',
                'quantity' => '3',
                'size' => 'S',
                'discount' => '0.00',
                'total' => '1260000',
                'payment_name' => 'Thanh toán khi nhận hàng'
            ]
        ]);
    }
}
