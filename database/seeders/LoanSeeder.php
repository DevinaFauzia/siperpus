<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table('loans')->insert([
                'user_npm' => DB::table('users')->inRandomOrder()->first()->npm,
                'loan_at' => now(),
                'return_at' => now()->addDays(7),
            ]);
        }
    }
}
