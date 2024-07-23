<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '10000',
                'description' => 'A Smartphone with 4GB RAM, Snapdragon 650',
                'category' => 'mobile',
                'gallery' => 'https://www.lg.com/levant_en/images/mobile-phones/md05994779/gallery/medium01_1.jpg'
            ],
            [
                'name' => 'Oppo',
                'price' => '11000',
                'description' => 'A Smartphone with 6GB RAM, Snapdragon 620',
                'category' => 'mobile',
                'gallery' => 'https://opsg-img-cdn-gl.heytapimg.com/epb/202406/05/gTAo69no5rLOlTVK.png'
            ],
            [
                'name' => 'LG 32LED',
                'price' => '14000',
                'description' => 'A Smart TV with inbuilt Chromecast and Dolby 20W Speaker',
                'category' => 'TV',
                'gallery' => 'https://www.lg.com/content/dam/channel/wcms/in/images/tvs/32lq643bpta_atrq_eail_in_c/promotion-offer/32LQ643BPTA-450.jpg'
            ]
        ]);
    }
}
