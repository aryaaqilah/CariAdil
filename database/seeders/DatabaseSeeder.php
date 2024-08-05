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
                ['nomor_pemohon' => 'CA-001',
                'jenis_perkara' => 'Pidana',
                'nama' => 'Andi Gunawan',
                'nama_panggilan' => 'Andi',
                'tempat_lahir' => 'Surabaya',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Buddha',
                'status_perkawinan' => 'Sudah',
                'alamat_lengkap' => 'Jl. Dharmawangsa No. 78',
                'rt_rw' => '05/07',
                'desa_kelurahan' => 'Airlangga',
                'kabupaten_kota' => 'Surabaya',
                'kode_pos' => '60286',
                'kecamatan' => 'Gubeng',
                'jumlah_anak' => '2',
                'jumlah_anak_tanggungan' => '2',
                'provinsi' => 'Jawa Timur',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '3578061409720002',
                'keterangan_tidak_mampu' => '4',
                'nomor_keterangan_tidak_mampu' => '-',
                'pekerjaan' => 'Purnawirawan',
                'jumlah_tanggungan' => 0,
                'pendidikan_terakhir' => 'Akademi',
                'telepon' => '(031) 234-5678',
                'hp' => '0821-9876-5432',
                'uraian' => 'Saya sudah mengajukan laporan pidana pembunuhan pembantu saya yang bernama Aminah di Bogor sejak tiga bulan lalu, namun sampai sekarang tidak ada perkembangan sama sekali dari pihak kepolisian. Pelaku masih bebas berkeliaran tanpa ada tindakan yang nyata. Saya merasa proses hukum ini berjalan sangat lambat dan tidak ada transparansi dalam penanganannya. Mohon agar kasus saya segera ditindaklanjuti.',
                'lokasi_pembuatan_form' => 'Surabaya',
                'tanggal' => Carbon::now(),
                'target_donasi' => 1000000,
                'status_pengajuan' => 'Accepted',
                'image_url' => '',],

                ['nomor_pemohon' => 'CA-002',
                'jenis_perkara' => 'Perdata',
                'nama' => 'Huya Shimiso',
                'nama_panggilan' => 'Yashi',
                'tempat_lahir' => 'Tokyo',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Kristen',
                'status_perkawinan' => 'Sudah',
                'alamat_lengkap' => ' Jl. Kemang Raya No. 12',
                'rt_rw' => '03/05',
                'desa_kelurahan' => 'Bangka',
                'kabupaten_kota' => 'Jakarta Selatan',
                'kode_pos' => '12730',
                'kecamatan' => 'Mampang Prapatan',
                'jumlah_anak' => '1',
                'jumlah_anak_tanggungan' => '2',
                'provinsi' => 'DKI Jakarta',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '3174020501850001',
                'keterangan_tidak_mampu' => '4',
                'nomor_keterangan_tidak_mampu' => '-',
                'pekerjaan' => 'Pekerja Tetap',
                'jumlah_tanggungan' => 0,
                'pendidikan_terakhir' => 'Perguruan Tinggi',
                'telepon' => '(021) 765-4321',
                'hp' => '0812-3456-7890',
                'uraian' => 'Saya telah mengajukan gugatan perdata mengenai Sengketa Tanah di Depok Selatan sejak enam bulan lalu, tapi proses persidangannya berjalan sangat lambat. Pengadilan terus menunda-nunda jadwal sidang tanpa alasan yang jelas. Saya butuh kepastian hukum secepatnya agar masalah ini bisa segera terselesaikan. Mohon pengadilan lebih memperhatikan kasus saya',
                'lokasi_pembuatan_form' => 'Jakarta Selatan',
                'tanggal' => Carbon::now(),
                'target_donasi' => 20000000,
                'status_pengajuan' => 'Pending',
                'image_url' => '',],

                ['nomor_pemohon' => 'CA-003',
                'jenis_perkara' => 'Perdata',
                'nama' => 'Utami Rutami',
                'nama_panggilan' => 'Ami',
                'tempat_lahir' => 'Bogor',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'status_perkawinan' => 'Sudah',
                'alamat_lengkap' => 'Jl. Merdeka No. 45',
                'rt_rw' => '01/04',
                'desa_kelurahan' => 'Sukaraja',
                'kabupaten_kota' => 'Sukabumi',
                'kode_pos' => '43118',
                'kecamatan' => 'Sukaraja',
                'jumlah_anak' => '3',
                'jumlah_anak_tanggungan' => '2',
                'provinsi' => 'Jawa Barat',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '3207026543210002',
                'keterangan_tidak_mampu' => '1',
                'nomor_keterangan_tidak_mampu' => '123/456/2024',
                'pekerjaan' => 'Ibu Rumah Tangga',
                'jumlah_tanggungan' => 0,
                'pendidikan_terakhir' => 'SMA',
                'telepon' => '-',
                'hp' => '0821-2345-6789',
                'uraian' => 'Dalam pengajuan gugatan perdata mengenai Pembagian Harta Warisan, saya merasa tidak mendapatkan perlakuan yang adil dari hakim. Hakim terlihat memihak kepada pihak lawan tanpa mempertimbangkan bukti yang saya ajukan. Saya sangat kecewa dengan putusan yang tidak adil ini.',
                'lokasi_pembuatan_form' => 'Surabaya',
                'tanggal' => Carbon::now(),
                'target_donasi' => 15000000,
                'status_pengajuan' => 'Pending',
                'image_url' => '',],

                ['nomor_pemohon' => 'CA-004',
                'jenis_perkara' => null,
                'nama' => 'Jessica Aireen Wijaya',
                'nama_panggilan' => 'Jessica',
                'tempat_lahir' => 'Singkawang',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Katolik',
                'status_perkawinan' => 'Belum',
                'alamat_lengkap' => 'Jl. Yos Sudarso No. 23',
                'rt_rw' => '04/06',
                'desa_kelurahan' => 'Pontianak Timur',
                'kabupaten_kota' => 'Pontianak',
                'kode_pos' => '78121',
                'kecamatan' => 'Pontianak Timur',
                'jumlah_anak' => '0',
                'jumlah_anak_tanggungan' => '0',
                'provinsi' => 'Kalimantan Barat',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '6113012409800001',
                'keterangan_tidak_mampu' => '3',
                'nomor_keterangan_tidak_mampu' => '6543 2109 8765 4321',
                'pekerjaan' => 'Mahasiswa',
                'jumlah_tanggungan' => 0,
                'pendidikan_terakhir' => 'SMA',
                'telepon' => '(0561) 987-6543',
                'hp' => '0823-4567-8901',
                'uraian' => 'Proses penyidikan terhadap laporan pidana saya, Siti Rukmini, mengenai kasus Penipuan Investasi Bodong sangat tidak profesional, banyak bukti yang tidak diperhatikan. Saya merasa diabaikan sebagai korban dan pelaku sepertinya mendapat perlakuan istimewa. Saya sangat kecewa dengan kinerja aparat penegak hukum yang terkesan tidak serius. Tolong berikan keadilan yang seharusnya untuk saya.','lokasi_pembuatan_form' => 'Pontianak',
                'tanggal' => Carbon::now(),
                'target_donasi' => 1200000,
                'status_pengajuan' => 'Pending',
                'image_url' => '',],

                ['nomor_pemohon' => 'CA-005',
                'jenis_perkara' =>  null,
                'nama' => 'Rayhan Fikri Setiawan',
                'nama_panggilan' => 'Fikri',
                'tempat_lahir' => 'Surabaya',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'status_perkawinan' => 'Sudah',
                'alamat_lengkap' => 'Jl. Mayjend Sungkono No. 45',
                'rt_rw' => '02/03',
                'desa_kelurahan' => 'Dukuh Pakis',
                'kabupaten_kota' => 'Surabaya',
                'kode_pos' => '60225',
                'kecamatan' => 'Dukuh Pakis',
                'jumlah_anak' => '1',
                'jumlah_anak_tanggungan' => '1',
                'provinsi' => 'Jawa Timur',
                'identitas_diri' => 'KTP',
                'nomor_identitas' => '3578056209850001',
                'keterangan_tidak_mampu' => '4',
                'nomor_keterangan_tidak_mampu' => '-',
                'pekerjaan' => 'Pekerja Tetap',
                'jumlah_tanggungan' => 0,
                'pendidikan_terakhir' => 'Akademi',
                'telepon' => '(031) 567-8901',
                'hp' => '0813-1234-5678',
                'uraian' =>'Saya telah mengajukan gugatan perdata mengenai Kasus Penipuan Kontrak Kerjasama sejak lima bulan lalu, tetapi prosesnya sangat berlarut-larut di pengadilan. Jadwal sidang sering kali ditunda tanpa alasan yang jelas dan tidak ada kepastian hukum. Saya sangat membutuhkan penyelesaian segera agar kerugian saya bisa dipulihkan. Mohon pengadilan memberikan perhatian lebih pada kasus saya.','lokasi_pembuatan_form' => 'Surabaya',
                'tanggal' => Carbon::now(),
                'target_donasi' => 1000000,
                'status_pengajuan' => 'Pending',
                'image_url' => '',],

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
                'password' => bcrypt('1234'),
                'nomor_telepon' => '(0293)-7739234',
                'email' => 'gmail@com',
                'alamat' => 'Sukabumi'
            ],
            [
                'nama_lbh' => 'LBH Maju Abadi',
                'password' => bcrypt('1234maju'),
                'nomor_telepon' => '(0293)-7739234',
                'email' => 'maju_abadi@gmail.com',
                'alamat' => 'Sukabumi'
            ],
            [
                'nama_lbh' => 'LBH Carolus',
                'password' => bcrypt('carolus123'),
                'nomor_telepon' => '08868214923',
                'email' => 'carolus@gmail.com',
                'alamat' => 'Rumah Talenta BCA'
            ],
            [
                'nama_lbh' => 'LBH Evotianus',
                'password' => bcrypt('011004'),
                'nomor_telepon' => '08717341497923',
                'email' => 'evo_lbh@gmail.com',
                'alamat' => 'Pontianak',
            ],
        ];

        $kasusHukumArray = [
            [
                'title' => 'Pembunuhan ART di Bogor',
                'id_lbh' => 4,
                'description' => 'Saya sudah mengajukan laporan pidana pembunuhan pembantu saya yang bernama Aminah di Bogor sejak tiga bulan lalu, namun sampai sekarang tidak ada perkembangan sama sekali dari pihak kepolisian. Pelaku masih bebas berkeliaran tanpa ada tindakan yang nyata. Saya merasa proses hukum ini berjalan sangat lambat dan tidak ada transparansi dalam penanganannya. Mohon agar kasus saya segera ditindaklanjuti.',
                'tanggal' => Carbon::now(),
                'target_donasi' => '10000000',
                // 'id_bank' => 1,
                'id_form' => 1,

                'status_pengajuan' => 'Accepted',
                'image_url' => 'tygbh',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Gugatan Sengketa Tanah di Depok Selatan',
                'id_lbh' => 1,
                'description' => 'Saya telah mengajukan gugatan perdata mengenai Sengketa Tanah di Depok Selatan sejak enam bulan lalu, tapi proses persidangannya berjalan sangat lambat. Pengadilan terus menunda-nunda jadwal sidang tanpa alasan yang jelas. Saya butuh kepastian hukum secepatnya agar masalah ini bisa segera terselesaikan. Mohon pengadilan lebih memperhatikan kasus saya',
                'tanggal' => Carbon::now(),
                'target_donasi' => '2500000',
                // 'id_bank' => 1,
                'id_form' => 2,

                'status_pengajuan' => 'Accepted',
                'image_url' => 'tygbh',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Pembagian Harta Warisan yang Tidak Adil',
                'id_lbh' => 3,
                'description' => 'Dalam pengajuan gugatan perdata mengenai Pembagian Harta Warisan, saya merasa tidak mendapatkan perlakuan yang adil dari hakim. Hakim terlihat memihak kepada pihak lawan tanpa mempertimbangkan bukti yang saya ajukan. Saya sangat kecewa dengan putusan yang tidak adil ini.',
                'tanggal' => Carbon::now(),
                'target_donasi' => '2500000',
                // 'id_bank' => 1,
                'id_form' => 3,

                'status_pengajuan' => 'Pending',
                'image_url' => 'tygbh',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Ketidakadilan dalam Penipuan Investasi Bodong',
                'id_lbh' => 2,
                'description' => 'Proses penyidikan terhadap laporan pidana saya, Siti Rukmini, mengenai kasus Penipuan Investasi Bodong sangat tidak profesional, banyak bukti yang tidak diperhatikan. Saya merasa diabaikan sebagai korban dan pelaku sepertinya mendapat perlakuan istimewa. Saya sangat kecewa dengan kinerja aparat penegak hukum yang terkesan tidak serius. Tolong berikan keadilan yang seharusnya untuk saya.',
                'tanggal' => Carbon::now(),
                'target_donasi' => '2500000',
                // 'id_bank' => 1,
                'id_form' => 4,

                'status_pengajuan' => 'Pending',
                'image_url' => 'tygbh',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Kasus Penipuan Kontrak Kerjasama yang Tak Kunjung Selesai',
                'id_lbh' => 4,
                'description' => 'Saya telah mengajukan gugatan perdata mengenai Kasus Penipuan Kontrak Kerjasama sejak lima bulan lalu, tetapi prosesnya sangat berlarut-larut di pengadilan. Jadwal sidang sering kali ditunda tanpa alasan yang jelas dan tidak ada kepastian hukum. Saya sangat membutuhkan penyelesaian segera agar kerugian saya bisa dipulihkan. Mohon pengadilan memberikan perhatian lebih pada kasus saya.',
                'tanggal' => Carbon::now(),
                'target_donasi' => '2500000',
                // 'id_bank' => 1,
                'id_form' => 5,

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
            // LBHSeeder::class,
        ]);

        FormPengajuan::insert($formArray);
        LBH::insert($lbhArray);
        KasusHukum::insert($kasusHukumArray);
        Bank::insert($bankArray);
        ProgressKasusHukum::insert($progressArray);
        TransaksiDonasi::insert($transaksiArray);
    }
}
