<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SoldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('solds')->insert([
            ['vehicle_id' => 1, 'customer_id' => 1, 'dealer_id' => 1, 'sold_date' => '2023-01-15', 'sold_price' => 21000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 2, 'customer_id' => 2, 'dealer_id' => 2, 'sold_date' => '2023-02-20', 'sold_price' => 22000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 3, 'customer_id' => 3, 'dealer_id' => 3, 'sold_date' => '2023-03-18', 'sold_price' => 18000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 4, 'customer_id' => 4, 'dealer_id' => 1, 'sold_date' => '2023-04-22', 'sold_price' => 25000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 5, 'customer_id' => 5, 'dealer_id' => 2, 'sold_date' => '2023-05-15', 'sold_price' => 15000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 6, 'customer_id' => 1, 'dealer_id' => 3, 'sold_date' => '2023-06-10', 'sold_price' => 14000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 7, 'customer_id' => 1, 'dealer_id' => 1, 'sold_date' => '2023-07-08', 'sold_price' => 30000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 8, 'customer_id' => 2, 'dealer_id' => 2, 'sold_date' => '2023-08-05', 'sold_price' => 17000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 9, 'customer_id' => 3, 'dealer_id' => 3, 'sold_date' => '2023-09-12', 'sold_price' => 35000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 10, 'customer_id' => 4, 'dealer_id' => 1, 'sold_date' => '2023-10-25', 'sold_price' => 32000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 11, 'customer_id' => 5, 'dealer_id' => 2, 'sold_date' => '2023-11-19', 'sold_price' => 40000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 12, 'customer_id' => 2, 'dealer_id' => 3, 'sold_date' => '2023-12-17', 'sold_price' => 45000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 13, 'customer_id' => 1, 'dealer_id' => 1, 'sold_date' => '2023-11-15', 'sold_price' => 38000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 14, 'customer_id' => 2, 'dealer_id' => 2, 'sold_date' => '2023-10-13', 'sold_price' => 33000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 15, 'customer_id' => 3, 'dealer_id' => 3, 'sold_date' => '2023-09-11', 'sold_price' => 20000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 16, 'customer_id' => 4, 'dealer_id' => 1, 'sold_date' => '2023-08-09', 'sold_price' => 21000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 17, 'customer_id' => 5, 'dealer_id' => 2, 'sold_date' => '2023-07-07', 'sold_price' => 19000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 18, 'customer_id' => 1, 'dealer_id' => 3, 'sold_date' => '2023-06-05', 'sold_price' => 24000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 19, 'customer_id' => 1, 'dealer_id' => 1, 'sold_date' => '2023-05-03', 'sold_price' => 16000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 20, 'customer_id' => 2, 'dealer_id' => 2, 'sold_date' => '2023-04-01', 'sold_price' => 15000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
