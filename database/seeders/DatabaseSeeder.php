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
                'jenis_perkara' => 'Perdata',
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
                'status_pengajuan' => 'Accepted',
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
                'status_pengajuan' => 'Accepted',
                'image_url' => 'yguhnjmk',
            ],
            [
                'nomor_pemohon' => 'CA-004',
                'jenis_perkara' => 'Perdata',
                'nama' => 'Carolus',
                'nama_panggilan' => 'Caro',
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
                'status_pengajuan' => 'Accepted',
                'image_url' => 'yguhnjmk',
            ],
            [
                'nomor_pemohon' => 'CA-005',
                'jenis_perkara' => 'Perdata',
                'nama' => 'Carolus',
                'nama_panggilan' => 'Caro',
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
                'status_pengajuan' => 'Accepted',
                'image_url' => 'yguhnjmk',
            ],
            [
                'nomor_pemohon' => 'CA-006',
                'jenis_perkara' => 'Perdata',
                'nama' => 'Carolus',
                'nama_panggilan' => 'Caro',
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
                'status_pengajuan' => 'Accepted',
                'image_url' => 'yguhnjmk',
            ],
            [
                'nomor_pemohon' => 'CA-007',
                'jenis_perkara' => 'Perdata',
                'nama' => 'Carolus',
                'nama_panggilan' => 'Caro',
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
                'status_pengajuan' => 'Accepted',
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
