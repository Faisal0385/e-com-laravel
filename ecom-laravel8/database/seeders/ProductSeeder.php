<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'oppo Mobile',
                'price' => '200000',
                'description' => 'A smartphone with * GB ram',
                'category' => 'Mobile',
                'gallery' => 'https://www.91-img.com/pictures/132707-v4-oppo-f11-pro-mobile-phone-large-1.jpg?tr=q-60',
            ],
            [
                'name' => 'Sumsung TV',
                'price' => '1000000',
                'description' => 'A smart TV with many feature',
                'category' => 'Electronics',
                'gallery' => 'https://images.samsung.com/is/image/samsung/my-fhdtv-n5000-global-ua49n5000akxxm-frontblack-103833405?$PD_GALLERY_L_JPG$',
            ],
            [
                'name' => 'iphone Mobile',
                'price' => '80000',
                'description' => 'A smartphone with many feature',
                'category' => 'Mobile',
                'gallery' => 'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-pro-10.jpg',
            ],
            [
                'name' => 'Sony TV',
                'price' => '200000',
                'description' => 'A smartTV with many feature',
                'category' => 'Electronic',
                'gallery' => 'https://images.crutchfieldonline.com/ImageHandler/trim/620/378/products/2020/7/158/g15855XA8H-F.jpg',
            ]
        ]);

    }
}
