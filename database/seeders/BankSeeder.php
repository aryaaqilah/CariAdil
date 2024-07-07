<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [
            [
                'nama' => 'BCA',
                'no_rekening' => '1234567890',
            ],
            [
                'nama' => 'BNI',
                'no_rekening' => '0987654321',
            ],
            [
                'nama' => 'Mandiri',
                'no_rekening' => '1234567890',
            ],
        ];

        Bank::insert($banks);
    }
}
