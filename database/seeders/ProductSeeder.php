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
        DB::table('products')->insert([
            [
                'name'=>'Banana',
                'price'=>'1.69',
                'description'=>'pre-packed fresh Bananas from the market',
                'category'=>'Fruit',
                'gallery'=>'https://www.daysoftheyear.com/wp-content/uploads/banana-day1-scaled.jpg'
            ],
            [
                'name'=>'Long Marrow',
                'price'=>'7.69',
                'description'=>'pre-packed fresh Long Marrow from the market',
                'category'=>'Vegitable',
                'gallery'=>'https://www.gardeningknowhow.com/wp-content/uploads/2018/10/marrow-squash.jpg'
            ],
            [
                'name'=>'Oranges',
                'price'=>'3.69',
                'description'=>'pre-packed fresh Oranges from the market',
                'category'=>'Fruit',
                'gallery'=>'https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/a019-jakubk-0345-oranges.jpg?w=1200&h=1200&dpr=1&fit=clip&crop=default&fm=jpg&q=75&vib=3&con=3&usm=15&cs=srgb&bg=F4F4F3&ixlib=js-2.2.1&s=bfba775ebe6edb1d1a5c06503d87ed7a'
            ],
            [
                'name'=>'Spinach',
                'price'=>'4.19',
                'description'=>'pre-packed fresh Spinach from the market',
                'category'=>'Fruit',
                'gallery'=>'http://cdn.shopify.com/s/files/1/0466/9701/articles/YTTP_Editorial_SpinachBenefits_4a0357dc-6358-4d11-8827-5f7a27e0c944_1200x1200.jpg?v=1584659855'
            ],
            [
                'name'=>'Apple',
                'price'=>'4.69',
                'description'=>'pre-packed fresh Apples from the market',
                'category'=>'Fruit',
                'gallery'=>'https://i1.wp.com/blog.hellofresh.com/wp-content/uploads/2016/10/HF160920_Global_Blog_All_About_Apples_15_low-1.jpg?fit=3180%2C2120&ssl=1'
            ],
            [
                'name'=>'Carrot',
                'price'=>'3.99',
                'description'=>'pre-packed fresh Carrots from the market',
                'category'=>'Fruit',
                'gallery'=>'https://assets.bonappetit.com/photos/5cab6c0e3559180deec8b055/16:9/w_2560%2Cc_limit/Basically-Carrots.jpg'
            ],
            [
                'name'=>'Okra',
                'price'=>'6.69',
                'description'=>'pre-packed fresh Bananas from the market',
                'category'=>'Fruit',
                'gallery'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/India_-_Koyambedu_Market_-_Ladies_Finger_04_%283986996222%29.jpg/1200px-India_-_Koyambedu_Market_-_Ladies_Finger_04_%283986996222%29.jpg'
            ],

            

        ]); 
}
} 