<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banks')->insert([
        ['name' => 'Capitec', 'interest_rate' => 2.25],
        ['name' => 'FirstRand', 'interest_rate' => 1.5],
        ['name' => 'Absa', 'interest_rate' => 1.5],
    ]);
    }
}
