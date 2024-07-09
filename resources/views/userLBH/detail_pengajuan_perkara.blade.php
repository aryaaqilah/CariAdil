<link rel="stylesheet" href="{{ asset('style/styles.css') }}">

<x-layout :auth="$auth">
  <div class="container-fluid">
    <div class="pembatas"></div>
    <div class="row mt-5">
      <div class="col-1"></div>
      <div class="col-1">
        <button type="button" class="btn btn-orange"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: 1rem;">< Back</button>
      </div>
      <div class="col-10">
        <h5>Pengajuan Perkara</h5>
      </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
      <div class="col-10 text-center h1">
         <strong>Panah Asmara</strong>
      </div>

      <div class="d-flex justify-content-center gap-3 my-3">
        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1); font-size: 14PX">Pidana</span>
        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1); font-size: 14PX">Perebutan Hak Asuh Anak</span>
        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1); font-size: 14PX">Penggugat</span>
      </div>

      <div class="d-flex justify-content-center">
        <p> Diajukan tanggal 20 January 2019 </p>
      </div>

      <div class="col-4"></div>
      <div class="col-4">
        <img src="/assets/images/jumbotron1.png" class="img-fluid" alt="...", style="height: 100%; width: 100%; border-radius: 12px">
      </div>
      <div class="col-4"></div>

      <div class="d-flex mt-5 justify-content-center" >
        <h4>Terima Perkara Ini?</h4>
      </div>

      <div class="d-flex justify-content-center mt-2 gap-4 mb-5" style="color:rgba(232, 123, 47, 1)">
        <i class="fa-solid fa-circle-check fa-4x"></i>
        <i class="fa-solid fa-circle-xmark fa-4x"></i>
      </div>

      <div class="d-flex mt-3 justify-content-center" >
        <h4>Rincian pengajuan</h4>
      </div>


      <div class="col-1"></div>
      <div class="col-10 mb-5">
        <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Data Pribadi</button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="item-container">
                  <div class="row m-3">
                    <div class="col-4">
                      <p>Nama Lengkap</p>
                      <p>Nama Panggilan</p>
                      <p>Tempat, Tanggal Lahir</p>
                      <p>Jenis Kelamin</p>
                      <p>Agama</p>
                      <p>Status Perkawinan</p>
                      <p>Jumlah Anak</p>
                      <p>Anak Dalam Tanggungan</p>
                      <p>Alamat</p>
                      <p>RT/RW</p>
                      <p>Desa</p>
                      <p>Kecamatan</p>
                      <p>Kota</p>
                      <p>Provinsi</p>
                      <p>Kode Pos</p>
                    </div>
                    <div class="col-8">
                      <p>: Andreas Liujaya</p>
                      <p>: Andreas</p>
                      <p>: Jakarta, 29 Agustus 2004</p>
                      <p>: Laki-laki</p>
                      <p>: Kristen</p>
                      <p>: Belum Kawin</p>
                      <p>: 2</p>
                      <p>: 2</p>
                      <p>: Rumah Talenta BCA</p>
                      <p>: 67/90</p>
                      <p>: Sumur Batu</p>
                      <p>: Babakan Madang</p>
                      <p>: Kab. Bogor</p>
                      <p>: Jawa Barat</p>
                      <p>: 99870</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Data Tambahan
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="item-container">
                  <div class="row m-3">
                    <div class="col-4">
                      <p>Identitas Diri</p>
                      <p>Nomor Identitas Diri</p>
                      <p>Keterangan Tidak Mampu</p>
                      <p>Nomor Keterangan Tidak Mampu</p>
                      <p>Pekerjaan</p>
                      <p>Jumlah Tanggungan</p>
                      <p>Pendidikan Terakhir</p>
                      <p>Telepon</p>
                      <p>HP</p>
                    </div>
                    <div class="col-8">
                      <p>: SIM</p>
                      <p>: 1234567890</p>
                      <p>: Tidak</p>
                      <p>: -</p>
                      <p>: Mahasiswa</p>
                      <p>: 2</p>
                      <p>: S1</p>
                      <p>: 09090909</p>
                      <p>: 084243712301</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Pokok Persoalan
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="item-container">
                  <div class="row m-3">
                    <p>Andreas adalah seorang yang memiliki hihihiha dan hohohoho. Eas Eas wek wek</P>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</x-layout>
  
