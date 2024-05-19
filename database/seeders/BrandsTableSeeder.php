<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name' => 'Toyota', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Honda', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ford', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chevrolet', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BMW', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mercedes-Benz', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Audi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nissan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hyundai', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kia', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
