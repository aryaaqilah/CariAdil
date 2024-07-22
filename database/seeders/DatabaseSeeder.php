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
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            $formArray = [
                [
                'nomor_pemohon' => 'CA-001',
                'jenis_perkara' => 'Pidana',
                'nama' => 'Joeliardo Gerald Leviothniel',
                'nama_panggilan' => 'Joel',
                'tempat_lahir' => 'Bogor',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Kristen',
                'status_perkawinan' => 'Belum Kawin',
                'alamat_lengkap' => 'Jalan Senam No.17',
                'rt_rw' => '01/04',
                'desa_kelurahan' => 'Tanah Sareal',
                'kabupaten_kota' => 'Kota Bogor',
                'kode_pos' => '43192',
                'kecamatan' => 'Tanah Sareal',
                'jumlah_anak' => '1',
                'jumlah_anak_tanggungan' => '1',
                'provinsi' => 'Jawa Barat',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '1227364927381635',
                'keterangan_tidak_mampu' => 'Tidak',
                'nomor_keterangan_tidak_mampu' => '-',
                'pekerjaan' => 'Pekerja Tetap',
                'jumlah_tanggungan' => 2,
                'pendidikan_terakhir' => 'Akademi',
                'telepon' => '6638299',
                'hp' => '08362936472',
                'uraian' => 'Saya punya masalah dengan salah satu petinggi di perusahaan saya. Direktur bagian keuangan saya memperlakukan saya secara tidak adil sehingga saya dipecat.',
                'lokasi_pembuatan_form' => 'Bogor',
                'tanggal' => Carbon::now(),
                'target_donasi' => 1000000,
                'status_pengajuan' => 'Accepted',
                'image_url' => 'yguhnjmk',
            ],
            [
                'nomor_pemohon' => 'CA-002',
                'jenis_perkara' => NULL,
                'nama' => 'Arya Aqilah',
                'nama_panggilan' => 'Arya',
                'tempat_lahir' => 'Sukabumi',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'alamat_lengkap' => 'BCA Learning Institute',
                'rt_rw' => '02/04',
                'desa_kelurahan' => 'Sumur Batu',
                'kabupaten_kota' => 'Kabupaten Bogor',
                'kode_pos' => '43192',
                'kecamatan' => 'Babakan Madang',
                'jumlah_anak' => '2',
                'jumlah_anak_tanggungan' => '2',
                'provinsi' => 'Jawa Barat',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '3202383649273563',
                'keterangan_tidak_mampu' => 'Tidak',
                'nomor_keterangan_tidak_mampu' => '-',
                'pekerjaan' => 'Pekerja Tetap',
                'jumlah_tanggungan' => 3,
                'pendidikan_terakhir' => 'SMA',
                'telepon' => '-',
                'hp' => '081987693628',
                'uraian' => 'Saya adalah seseorang yang terkena masalah dengan seorang driver ojol.',
                'lokasi_pembuatan_form' => 'Bogor',
                'tanggal' => Carbon::now(),
                'target_donasi' => 25000000,
                'status_pengajuan' => 'Pending',
                'image_url' => 'yguhnjmk',
            ],
            [
                'nomor_pemohon' => 'CA-003',
                'jenis_perkara' => NULL,
                'nama' => 'Evotianus Felix',
                'nama_panggilan' => 'Evo',
                'tempat_lahir' => 'Pontianak',
                'jenis_kelamin' => 'Pria',
                'agama' => 'Katolik',
                'status_perkawinan' => 'Belum Kawin',
                'alamat_lengkap' => 'Rumah Talenta BCA',
                'rt_rw' => '01/04',
                'desa_kelurahan' => 'Sumur Batu',
                'kabupaten_kota' => 'Bogor',
                'kode_pos' => '43192',
                'kecamatan' => 'Babakan Madang',
                'jumlah_anak' => '0',
                'jumlah_anak_tanggungan' => '0',
                'provinsi' => 'Jawa Barat',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '3273529362800233',
                'keterangan_tidak_mampu' => 'SKTM',
                'nomor_keterangan_tidak_mampu' => '5678982391245',
                'pekerjaan' => 'Mahasiswa',
                'jumlah_tanggungan' => 2,
                'pendidikan_terakhir' => 'SMA',
                'telepon' => '-',
                'hp' => '0869876839127',
                'uraian' => 'Saya digusur dari asrama karena dituduh mengambil wifi asrama.',
                'lokasi_pembuatan_form' => 'Bogor',
                'tanggal' => Carbon::now(),
                'target_donasi' => 4000000,
                'status_pengajuan' => 'Pending',
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
            ['nama_lbh' => 'LBH Maju Abadi',
            'password' => bcrypt('1234maju'),
            'nomor_telepon' => '(0293)-7739234',
            'email' => 'maju_abadi@gmail.com',
            'alamat' => 'Sukabumi'],
            ['nama_lbh' => 'LBH Carolus',
            'password' => bcrypt('carolus123'),
            'nomor_telepon' => '08868214923',
            'email' => 'carolus@gmail.com',
            'alamat' => 'Rumah Talenta BCA'],
            ['nama_lbh' => 'LBH Evotianus',
            'password' => bcrypt('011004'),
            'nomor_telepon' => '08717341497923',
            'email' => 'evo_lbh@gmail.com',
            'alamat' => 'Pontianak',],
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

                'status_pengajuan' => 'Pending',
                'image_url' => 'tygbh',
                'created_at' => Carbon::now()
            ],
        ];

        $progressArray = [
            [
                'id_kasus' => 1,
                'topik_progress' => 'Sidang 1',
                'lokasi' => 'PN Jakarta',
                'date' => Carbon::now(),
                'waktu' => Carbon::now(),
                'detail' => 'Sudah dilaksanakan sidang pertama',
            ],
            [
                'id_kasus' => 1,
                'topik_progress' => 'Sidang 2',
                'lokasi' => 'PN Bogor',
                'date' => Carbon::now(),
                'waktu' => Carbon::now(),
                'detail' => 'Sudah dilaksanakan sidang kedua',
            ],
            [
                'id_kasus' => 2,
                'topik_progress' => 'Sidang 1',
                'lokasi' => 'PN Sukabumi',
                'date' => Carbon::now(),
                'waktu' => Carbon::now(),
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
            // [
            //     'id_kasus_hukum' => 2,
            //     'id_bank' => 2,
            //     'nominal' => '500000',
            //     'nama' => 'Arya',
            //     'email' => 'arya@gmail.com',
            //     'nomor_telepon' => '087785243656',
            //     'dukungan' => '',
            //     'status_pembayaran' => 1,
            //     'created_at' => Carbon::now()
            // ],
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
            LBHSeeder::class,
        ]);

        FormPengajuan::insert($formArray);
        LBH::insert($lbhArray);
        // KasusHukum::insert($kasusHukumArray);
        Bank::insert($bankArray);
        // ProgressKasusHukum::insert($progressArray);
        TransaksiDonasi::insert($transaksiArray);
    }
}
