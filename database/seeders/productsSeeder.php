<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'product_name' => 'VOLT TEE',
                'slug' => 'VOLT-TEE',
                'category_id' => '1',
                'description' => 'Form áo Châu Âu.Định lượng : 220 gsm.100% cotton.Sản phẩm được in lụa.Tag logo được gắn ở tay áo.Tem chống hàng giả của SWE được may trong sườn áo.Các bạn vui lòng tham khảo bảng size chart trước khi đặt hàng....',
                'image' => '{"image1" : "06.jpg", "image2" : "06_2.jpg"}',
                'status' => '1',
                'price' => '320000',
                'discount_id' => '9'
            ],
            [
                'id' => 2,
                'product_name' => 'CHECKERED JACKET',
                'slug' => 'CHECKERED-JACKET',
                'category_id' => '2',
                'description' => 'Áo khoác dù 2 lớp, dày dặn.Logo SWE được in lụa.Form Châu Âu...',
                'image' => '{"image1" : "01.jpg", "image2" : "01_2.jpg"}',
                'status' => '1',
                'price' => '600000',
                'discount_id' => '9'
            ],
            [
                'id' => 3,
                'product_name' => 'SKELETON TEE',
                'slug' => 'SKELETON-TEE',
                'category_id' => '1',
                'description' => 'Form áo Châu Âu.Định lượng : 220 gsm.100% cotton.Sản phẩm được in DTG.Công nghệ Enzyme wash giúp thớ vải sẽ trở nên mềm mịn.Tag logo được gắn ở tay áo.Tem chống hàng giả của SWE được may trong sườn áo.Các bạn vui lòng tham khảo bảng size chart trước khi đặt hàng....                ',
                'image' => '{"image1" : "02.jpg", "image2" : "02_2.jpg"}',
                'status' => '1',
                'price' => '420000',
                'discount_id' => '9'
            ]
        ]);
    }
}
