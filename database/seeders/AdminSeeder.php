<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\charit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChartiySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        charit::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
