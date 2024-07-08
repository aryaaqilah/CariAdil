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
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Kemeja',
                'id_kategori' => 1,
                'harga' => 'Rp 100.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Jaket',
                'id_kategori' => 1,
                'harga' => 'Rp 150.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Kaos Polo',
                'id_kategori' => 1,
                'harga' => 'Rp 100.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Baju Batik',
                'id_kategori' => 1,
                'harga' => 'Rp 200.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Celana Panjang',
                'id_kategori' => 2,
                'harga' => 'Rp 100.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Celana Pendek',
                'id_kategori' => 2,
                'harga' => 'Rp 50.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Celana Jeans',
                'id_kategori' => 2,
                'harga' => 'Rp 150.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Celana Jogger',
                'id_kategori' => 2,
                'harga' => 'Rp 200.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Sneakers',
                'id_kategori' => 3,
                'harga' => 'Rp 200.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Sepatu Formal',
                'id_kategori' => 3,
                'harga' => 'Rp 300.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Topi',
                'id_kategori' => 4,
                'harga' => 'Rp 30.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Masker',
                'id_kategori' => 4,
                'harga' => 'Rp 10.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Gelang',
                'id_kategori' => 4,
                'harga' => 'Rp 20.000',
                'image_url' => 'Product.png',
            ],
            [
                'nama' => 'Kalung',
                'id_kategori' => 4,
                'harga' => 'Rp 50.000',
                'image_url' => 'Product.png',
            ]
        ];

        Produk::insert($produk);
    }
}
