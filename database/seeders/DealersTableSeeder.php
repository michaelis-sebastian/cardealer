<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dealers')->insert([
            ['name' => 'John Doe Auto Sales', 'location' => '123 Main St, Anytown, USA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Best Cars Dealership', 'location' => '456 Elm St, Othertown, USA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Auto World', 'location' => '789 Oak St, Sometown, USA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Car King', 'location' => '321 Pine St, Anycity, USA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Premier Auto', 'location' => '654 Maple St, Thiscity, USA', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
