<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ordersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'id' => '1',
                'customer_id' => '1',
                'status' => '4',
                'address' => 'Thai Xuyen - Thai Thuy - Thai Binh',
                'payment_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => '2',
                'customer_id' => '2',
                'status' => '0',
                'address' => 'Thai Xuyen - Thai Thuy - Thai Binh',
                'payment_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => '3',
                'customer_id' => '3',
                'status' => '2',
                'address' => 'Ha Noi',
                'payment_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => '4',
                'customer_id' => '4',
                'status' => '1',
                'address' => 'Hung Yen',
                'payment_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => '5',
                'customer_id' => '1',
                'status' => '4',
                'address' => 'Thai Xuyen - Thai Thuy - Thai Binh',
                'payment_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
