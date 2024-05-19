<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('models')->insert([
            ['name' => 'Corolla', 'brand_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Camry', 'brand_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Civic', 'brand_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Accord', 'brand_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mustang', 'brand_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'F-150', 'brand_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Silverado', 'brand_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Malibu', 'brand_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => '3 Series', 'brand_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'X5', 'brand_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'C-Class', 'brand_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'E-Class', 'brand_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'A4', 'brand_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Q7', 'brand_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Altima', 'brand_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rogue', 'brand_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Elantra', 'brand_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Santa Fe', 'brand_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Optima', 'brand_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sorento', 'brand_id' => 10, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
