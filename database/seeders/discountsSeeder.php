<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class discountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            [
                'id' => 1,
                'discount' => '0.75', 
            ],
            [
                'id' => 2,
                'discount' => '0.65', 
            ],
            [
                'id' => 3,
                'discount' => '0.55', 
            ],
            [
                'id' => 5,
                'discount' => '0.45', 
            ],
            [
                'id' => 6,
                'discount' => '0.35', 
            ],
            [
                'id' => 7,
                'discount' => '0.25', 
            ],
            [
                'id' => 8,
                'discount' => '0.15', 
            ]
        ]);
    }
}
