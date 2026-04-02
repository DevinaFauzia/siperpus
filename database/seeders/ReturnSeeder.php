<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReturnSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            DB::table('returns')->insert([
                'loan_detail_id' => rand(1, 50),
                'charge' => rand(0,1),
                'amount' => rand(0, 50000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}