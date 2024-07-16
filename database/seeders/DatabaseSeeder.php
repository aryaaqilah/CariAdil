<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\FormPengajuan;
use App\Models\TransaksiDonasi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KasusHukum;
use App\Models\LBH;
use App\Models\ProgressKasusHukum;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            $formArray = [
                [
                'nomor_pemohon' => 'CA-001',
                'jenis_perkara' => 'Pidana',
                'nama' => 'joeliardo joel',
                'nama_panggilan' => 'arya',
                'tempat_lahir' => 'Sukabumi',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'alamat_lengkap' => 'Sentul Sentul Sentul',
                'rt_rw' => '01/04',
                'desa_kelurahan' => 'Sumur Batu',
                'kabupaten_kota' => 'Bogor',
                'kode_pos' => '43192',
                'kecamatan' => 'Babakan Madang',
                'jumlah_anak' => '1',
                'jumlah_anak_tanggungan' => '1',
                'provinsi' => 'Jawa Barat',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '320233',
                'keterangan_tidak_mampu' => 'Tidak',
                'nomor_keterangan_tidak_mampu' => '56789',
                'pekerjaan' => 'mahasiswa',
                'jumlah_tanggungan' => 2,
                'pendidikan_terakhir' => 'SMA',
                'telepon' => 'Tidak Ada',
                'hp' => '09876',
                'uraian' => 'Saya adalah seseorang yang terkena masalah',
                'lokasi_pembuatan_form' => 'Bogor',
                'tanggal' => Carbon::now(),
                'image_url' => 'yguhnjmk',
            ],
            [
                'nomor_pemohon' => 'CA-002',
                'jenis_perkara' => 'Perdata',
                'nama' => 'arya aqilah',
                'nama_panggilan' => 'joel',
                'tempat_lahir' => 'Bogor',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'alamat_lengkap' => 'Sentul Sentul Sentul',
                'rt_rw' => '01/04',
                'desa_kelurahan' => 'Sumur Batu',
                'kabupaten_kota' => 'Bogor',
                'kode_pos' => '43192',
                'kecamatan' => 'Babakan Madang',
                'jumlah_anak' => '1',
                'jumlah_anak_tanggungan' => '1',
                'provinsi' => 'Jawa Barat',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '320233',
                'keterangan_tidak_mampu' => 'Tidak',
                'nomor_keterangan_tidak_mampu' => '56789',
                'pekerjaan' => 'mahasiswa',
                'jumlah_tanggungan' => 2,
                'pendidikan_terakhir' => 'SMA',
                'telepon' => 'Tidak Ada',
                'hp' => '09876',
                'uraian' => 'Saya adalah seseorang yang terkena masalah',
                'lokasi_pembuatan_form' => 'Bogor',
                'tanggal' => Carbon::now(),
                'image_url' => 'yguhnjmk',
            ],
            [
                'nomor_pemohon' => 'CA-003',
                'jenis_perkara' => NULL,
                'nama' => 'arya aqilah',
                'nama_panggilan' => 'joel',
                'tempat_lahir' => 'Bogor',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'alamat_lengkap' => 'Sentul Sentul Sentul',
                'rt_rw' => '01/04',
                'desa_kelurahan' => 'Sumur Batu',
                'kabupaten_kota' => 'Bogor',
                'kode_pos' => '43192',
                'kecamatan' => 'Babakan Madang',
                'jumlah_anak' => '1',
                'jumlah_anak_tanggungan' => '1',
                'provinsi' => 'Jawa Barat',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '320233',
                'keterangan_tidak_mampu' => 'Tidak',
                'nomor_keterangan_tidak_mampu' => '56789',
                'pekerjaan' => 'mahasiswa',
                'jumlah_tanggungan' => 2,
                'pendidikan_terakhir' => 'SMA',
                'telepon' => 'Tidak Ada',
                'hp' => '09876',
                'uraian' => 'Saya adalah seseorang yang terkena masalah',
                'lokasi_pembuatan_form' => 'Bogor',
                'tanggal' => Carbon::now(),
                'image_url' => 'yguhnjmk',
            ],
        ];

        $bankArray = [
            [

                'nama' => 'BCA',
                'no_rekening' => '0381160679',
            ],
            [

                'nama' => 'BRI',
                'no_rekening' => '315038701',
            ],
        ];

        $lbhArray = [
            [
                'nama_lbh' => 'Ojan Lomba',
                'password' => '1234',
                'nomor_telepon' => '012345',
                'email' => 'gmail@com',
                'alamat' => 'Sukabumi'
            ]
        ];

        $kasusHukumArray = [
            [
                'title' => 'Bantu Pemuda Bogor Ini',
                'id_lbh' => 1,
                'description' => 'Kasus ini adalah tentang seorang pemuda bogor',
                'tanggal' => Carbon::now(),
                'target_donasi' => '10000000',
                // 'id_bank' => 1,
                'id_form' => 1,

                'status_pengajuan' => 'Proses',
                'image_url' => 'tygbh'
            ],
            [
                'title' => 'Bantu Pemuda Sukabumi Ini',
                'id_lbh' => 1,
                'description' => 'Kasus ini adalah tentang seorang pemuda bogor',
                'tanggal' => Carbon::now(),
                'target_donasi' => '10000000',
                // 'id_bank' => 1,
                'id_form' => 2,
                'status_pengajuan' => 'Selesai',
                'image_url' => 'tygbh'
            ],
            [
                'title' => 'Bantu Wanita Pekanbaru ini',
                'id_lbh' => NULL,
                'description' => 'Kasus ini adalah tentang seorang pemuda bogor',
                'tanggal' => Carbon::now(),
                'target_donasi' => '10000000',
                // 'id_bank' => 1,
                'id_form' => 2,
                'status_pengajuan' => 'Proses',
                'image_url' => 'tygbh'
            ]
        ];

        $progressArray = [
            [
                'id_kasus' => 1,
                'topik_progress' => 'Sidang 1',
                'date' => Carbon::now(),
                'detail' => 'Sudah dilaksanakan sidang pertama',
            ],
            [
                'id_kasus' => 1,
                'topik_progress' => 'Sidang 2',
                'date' => Carbon::now(),
                'detail' => 'Sudah dilaksanakan sidang kedua',
            ],
            [
                'id_kasus' => 2,
                'topik_progress' => 'Sidang 1',
                'date' => Carbon::now(),
                'detail' => 'Sudah dilaksanakan sidang SATUUUUUU',
            ]
        ];

        $transaksiArray = [
            [
                'id_kasus_hukum' => 1,
                'id_bank' => 1,
                'nominal' => '200000',
                'nama' => 'Arya',
                'email' => 'arya@gmail.com',
                'nomor_telepon' => '087785243656',
                'dukungan' => '',
                'status_pembayaran' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id_kasus_hukum' => 1,
                'id_bank' => 2,
                'nominal' => '300000',
                'nama' => 'Arya',
                'email' => 'arya@gmail.com',
                'nomor_telepon' => '087785243656',
                'dukungan' => '',
                'status_pembayaran' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id_kasus_hukum' => 2,
                'id_bank' => 2,
                'nominal' => '500000',
                'nama' => 'Arya',
                'email' => 'arya@gmail.com',
                'nomor_telepon' => '087785243656',
                'dukungan' => '',
                'status_pembayaran' => 1,
                'created_at' => Carbon::now()
            ],
        ];

        // $kasusHukumArray = [
        //     [
        //         'title' => 'Ojan Lomba Title Semoga Menang',
        //         'nama_lbh' => 'Ojanlomba',
        //         'description' => 'Ojan lagi lomba semoga dia bisa menang dan mendapatkan uang jutaan rupiah dipotong pajak',
        //         'tanggal' => Carbon::now(),
        //         'target_donasi' => 1000000,
        //         'image_url' => 'awefiuih',
        //     ],
        //     [
        //         'title' => 'Ojan Lomba 2 Title Semoga Menang',
        //         'nama_lbh' => 'Ojanlomba 2',
        //         'description' => 'Ojan 2 lagi lomba semoga dia bisa menang dan mendapatkan uang jutaan rupiah dipotong pajak',
        //         'tanggal' => Carbon::now(),
        //         'target_donasi' => 1000000,
        //         'image_url' => 'awefiuih',
        //     ],
        //     [
        //         'title' => 'Ojan Lomba 3 Title Semoga Menang',
        //         'nama_lbh' => 'Ojanlomba 3',
        //         'description' => 'Ojan 3 lagi lomba semoga dia bisa menang dan mendapatkan uang jutaan rupiah dipotong pajak',
        //         'tanggal' => Carbon::now(),
        //         'target_donasi' => 1000000,
        //         'image_url' => 'awefiuih',
        //     ],
        // ];

        // KasusHukum::insert($kasusHukumArray);
        $this->call([
            KategoriSeeder::class,
            ProdukSeeder::class,
            AdminSeeder::class,
        ]);

        FormPengajuan::insert($formArray);
        LBH::insert($lbhArray);
        KasusHukum::insert($kasusHukumArray);
        Bank::insert($bankArray);
        ProgressKasusHukum::insert($progressArray);
        TransaksiDonasi::insert($transaksiArray);
    }
}
