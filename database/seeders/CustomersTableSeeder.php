<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'phone' => '555-1234', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bob Smith', 'email' => 'bob.smith@example.com', 'phone' => '555-5678', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Charlie Brown', 'email' => 'charlie.brown@example.com', 'phone' => '555-8765', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'David Wilson', 'email' => 'david.wilson@example.com', 'phone' => '555-4321', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eva Green', 'email' => 'eva.green@example.com', 'phone' => '555-6789', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
