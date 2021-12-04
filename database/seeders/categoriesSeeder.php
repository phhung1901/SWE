<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Str;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'category_name' => 'tops' 
            ],
            [
                'id' => 2,
                'category_name' => 'outerwear'
            ],
            [
                'id' => 3,
                'category_name' => 'bottoms'
            ],
            [
                'id' => 4,
                'category_name' => 'accessories'
            ]
        ]);
    }
}
