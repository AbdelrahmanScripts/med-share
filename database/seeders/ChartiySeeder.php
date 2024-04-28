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
            'name' => 'charity',
            'email' => 'charity@gmail.com',
            'password' => bcrypt('12345678'),
            // 'admin_id' => 7,
            // 'isAtive' => 1,
            // 'description' => 'description',
            // 'image' => 'image',
            // 'website_link' => 'website_link',
            // 'phone' => 'phone',
            // 'specialty_id' => 1,
        ]);
    }
}
