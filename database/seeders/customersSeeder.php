<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'id' => 1,
                'customer_name' => 'Pham Hung',
                'email' => 'hung94464@nuce.edu.vn',
                'phone' => '0983785181',
                'gender' => '1',
                'address' => 'Thai Binh',
                'rank' => '4',
                'date_of_birth' => '2001-01-19' 
            ],
            [
                'id' => 2,
                'customer_name' => 'Nguyen Phuong',
                'email' => 'phuongnguyen@gmail.com',
                'phone' => '0355675182',
                'gender' => '0',
                'address' => 'Thai Binh',
                'rank' => '2',
                'date_of_birth' => '1969-01-03' 
            ],
            [
                'id' => 3,
                'customer_name' => 'Khanh Tran',
                'email' => 'khanhmatlon@nuce.edu.vn',
                'phone' => '115',
                'gender' => '1',
                'address' => 'Hung Yen',
                'rank' => '0',
                'date_of_birth' => '2001-02-19' 
            ],
            [
                'id' => 4,
                'customer_name' => 'Lan Anh',
                'email' => 'lananh@nuce.edu.vn',
                'phone' => '113',
                'gender' => '0',
                'address' => 'Hung Yen',
                'rank' => '1',
                'date_of_birth' => '2001-02-19' 
            ]
        ]);
    }
}
