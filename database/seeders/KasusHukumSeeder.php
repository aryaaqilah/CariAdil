<?php

namespace Database\Seeders;

use App\Models\KasusHukum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KasusHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kasusHukumArray = [
            [
                'title' => 'Ojan Lomba Title Semoga Menang',
                'nama_lbh' => 'Ojanlomba',
                'description' => 'Ojan lagi lomba semoga dia bisa menang dan mendapatkan uang jutaan rupiah dipotong pajak',
                'tanggal' => Carbon::now(),
                'target_donasi' => 1000000,
                'image_url' => 'awefiuih',
            ],
            [
                'title' => 'Ojan Lomba 2 Title Semoga Menang',
                'nama_lbh' => 'Ojanlomba 2',
                'description' => 'Ojan 2 lagi lomba semoga dia bisa menang dan mendapatkan uang jutaan rupiah dipotong pajak',
                'tanggal' => Carbon::now(),
                'target_donasi' => 1000000,
                'image_url' => 'awefiuih',
            ],
            [
                'title' => 'Ojan Lomba 3 Title Semoga Menang',
                'nama_lbh' => 'Ojanlomba 3',
                'description' => 'Ojan 3 lagi lomba semoga dia bisa menang dan mendapatkan uang jutaan rupiah dipotong pajak',
                'tanggal' => Carbon::now(),
                'target_donasi' => 1000000,
                'image_url' => 'awefiuih',
            ],
        ];

        KasusHukum::insert($kasusHukumArray);
    }
}
