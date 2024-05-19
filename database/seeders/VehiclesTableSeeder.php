<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'model_id' => 1,
                'year' => 2021,
                'color' => 'Red',
                'price' => 20000,
                'image_link' => 'https://example.com/red_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 2,
                'year' => 2020,
                'color' => 'Blue',
                'price' => 22000,
                'image_link' => 'https://example.com/blue_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 3,
                'year' => 2019,
                'color' => 'Black',
                'price' => 18000,
                'image_link' => 'https://example.com/black_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 4,
                'year' => 2021,
                'color' => 'White',
                'price' => 25000,
                'image_link' => 'https://example.com/white_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 5,
                'year' => 2018,
                'color' => 'Gray',
                'price' => 15000,
                'image_link' => 'https://example.com/gray_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 6,
                'year' => 2017,
                'color' => 'Silver',
                'price' => 14000,
                'image_link' => 'https://example.com/silver_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 7,
                'year' => 2021,
                'color' => 'Red',
                'price' => 30000,
                'image_link' => 'https://example.com/red_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 8,
                'year' => 2019,
                'color' => 'Blue',
                'price' => 17000,
                'image_link' => 'https://example.com/blue_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 9,
                'year' => 2020,
                'color' => 'Black',
                'price' => 35000,
                'image_link' => 'https://example.com/black_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 10,
                'year' => 2018,
                'color' => 'White',
                'price' => 32000,
                'image_link' => 'https://example.com/white_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 11,
                'year' => 2021,
                'color' => 'Gray',
                'price' => 40000,
                'image_link' => 'https://example.com/gray_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 12,
                'year' => 2020,
                'color' => 'Silver',
                'price' => 45000,
                'image_link' => 'https://example.com/silver_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 13,
                'year' => 2019,
                'color' => 'Red',
                'price' => 38000,
                'image_link' => 'https://example.com/red_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 14,
                'year' => 2018,
                'color' => 'Blue',
                'price' => 33000,
                'image_link' => 'https://example.com/blue_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 15,
                'year' => 2017,
                'color' => 'Black',
                'price' => 20000,
                'image_link' => 'https://example.com/black_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 16,
                'year' => 2021,
                'color' => 'White',
                'price' => 21000,
                'image_link' => 'https://example.com/white_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 17,
                'year' => 2020,
                'color' => 'Gray',
                'price' => 19000,
                'image_link' => 'https://example.com/gray_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 18,
                'year' => 2019,
                'color' => 'Silver',
                'price' => 24000,
                'image_link' => 'https://example.com/silver_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 19,
                'year' => 2018,
                'color' => 'Red',
                'price' => 16000,
                'image_link' => 'https://example.com/red_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'model_id' => 20,
                'year' => 2017,
                'color' => 'Blue',
                'price' => 15000,
                'image_link' => 'https://example.com/blue_car_image.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
            // Add more entries here
        ]);
    }
}
