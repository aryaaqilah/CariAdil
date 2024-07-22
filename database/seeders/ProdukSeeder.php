<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = [
            [
                'nama' => 'Kaos Oblong',
                'id_kategori' => 1,
                'harga' => 'Rp 50.000',
                'image_url' => 'kaos.png',
            ],
            [
                'nama' => 'Kemeja',
                'id_kategori' => 1,
                'harga' => 'Rp 100.000',
                'image_url' => 'kemeja.png',
            ],
            [
                'nama' => 'Jaket',
                'id_kategori' => 1,
                'harga' => 'Rp 150.000',
                'image_url' => 'jaket.png',
            ],
            [
                'nama' => 'Kaos Polo',
                'id_kategori' => 1,
                'harga' => 'Rp 100.000',
                'image_url' => 'kaos_polo.png',
            ],
            [
                'nama' => 'Baju Batik',
                'id_kategori' => 1,
                'harga' => 'Rp 200.000',
                'image_url' => 'batik.png',
            ],
            [
                'nama' => 'Celana Panjang',
                'id_kategori' => 2,
                'harga' => 'Rp 100.000',
                'image_url' => 'celana_panjang.png',
            ],
            [
                'nama' => 'Celana Pendek',
                'id_kategori' => 2,
                'harga' => 'Rp 50.000',
                'image_url' => 'celana_pendek.png',
            ],
            [
                'nama' => 'Celana Jeans',
                'id_kategori' => 2,
                'harga' => 'Rp 150.000',
                'image_url' => 'celana_jeans.png',
            ],
            [
                'nama' => 'Celana Jogger',
                'id_kategori' => 2,
                'harga' => 'Rp 200.000',
                'image_url' => 'celana_jogger.png',
            ],
            [
                'nama' => 'Sneakers',
                'id_kategori' => 3,
                'harga' => 'Rp 200.000',
                'image_url' => 'sepatu_sneakers.png',
            ],
            [
                'nama' => 'Sepatu Formal',
                'id_kategori' => 3,
                'harga' => 'Rp 300.000',
                'image_url' => 'sepatu_formal.png',
            ],
            [
                'nama' => 'Topi',
                'id_kategori' => 4,
                'harga' => 'Rp 30.000',
                'image_url' => 'topi.png',
            ],
            [
                'nama' => 'Masker',
                'id_kategori' => 4,
                'harga' => 'Rp 10.000',
                'image_url' => 'masker.png',
            ],
            [
                'nama' => 'Gelang',
                'id_kategori' => 4,
                'harga' => 'Rp 20.000',
                'image_url' => 'gelang.png',
            ],
            [
                'nama' => 'Kalung',
                'id_kategori' => 4,
                'harga' => 'Rp 50.000',
                'image_url' => 'kalung.png',
            ]
        ];

        Produk::insert($produk);
    }
}
