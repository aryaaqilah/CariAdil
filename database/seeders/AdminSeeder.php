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
                'username' => 'Andreas Liujaya',
                'password' => bcrypt('admin1'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'Diandra Pramesti',
                'password' => bcrypt('andmin2'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'Agnes Sianturi',
                'password' => bcrypt('admin3'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'Catherine Olivia',
                'password' => bcrypt('admin4'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        Admin::insert($admins);
    }
}
