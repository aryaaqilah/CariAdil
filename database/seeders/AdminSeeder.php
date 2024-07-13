<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'evo',
                'password' => bcrypt('evo'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'david',
                'password' => bcrypt('david'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'jason',
                'password' => bcrypt('jason'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        Admin::insert($admins);
    }
}
