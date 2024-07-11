<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\LBH;

class LBHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataLBH = [
            ['nama_lbh' => 'Diandra LBH',
            'password' => Hash::make('12345'),
            'nomor_telepon' => '08868214923',
            'email' => 'diandra_lbh2@gmail.com',
            'alamat' => 'Rumah Talenta BCA',],
            ['nama_lbh' => 'Evo LBH',
            'password' => Hash::make('011004'),
            'nomor_telepon' => '08717341497923',
            'email' => 'evo_lbh@gmail.com',
            'alamat' => 'Pontianak',],
        ];

        LBH::insert($dataLBH);
    }
}
