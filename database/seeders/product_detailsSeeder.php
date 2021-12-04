<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_details')->insert([
            [
                'product_id' => '1',
                'size_id' => '5',
                'quantity' => '100'
            ],
            [
                'product_id' => '1',
                'size_id' => '6',
                'quantity' => '30'
            ],
            [
                'product_id' => '1',
                'size_id' => '2',
                'quantity' => '15'
            ],
            [
                'product_id' => '2',
                'size_id' => '6',
                'quantity' => '50'
            ],
            [
                'product_id' => '2',
                'size_id' => '1',
                'quantity' => '0'
            ],
            [
                'product_id' => '3',
                'size_id' => '6',
                'quantity' => '20'
            ],
            [
                'product_id' => '3',
                'size_id' => '3',
                'quantity' => '90'
            ],
        ]);
    }
}
