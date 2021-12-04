<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                'id' => '1',
                'size' => 'S',
            ],
            [
                'id' => '2',
                'size' => 'L',
            ],
            [
                'id' => '3',
                'size' => 'M',
            ],
            [
                'id' => '4',
                'size' => 'X',
            ],
            [
                'id' => '5',
                'size' => 'XL',
            ],
            [
                'id' => '6',
                'size' => 'XXL',
            ],
        ]);
    }
}
