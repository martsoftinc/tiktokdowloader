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
        ['name' => 'Fidelity', 'interest_rate' => 1.83],
        ['name' => 'Access', 'interest_rate' => 3.00],
        ['name' => 'GCB', 'interest_rate' => 1.89],
    ]);
    }
}
