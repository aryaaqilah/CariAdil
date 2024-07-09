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
        <h5>Perkara Berlangsung</h5>
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
        <p> Diterima tanggal 29 January 2019 </p>
      </div>

      <div class="col-4"></div>
      <div class="col-4">
        <img src="/assets/images/jumbotron1.png" class="img-fluid" alt="...", style="height: 100%; width: 100%; border-radius: 12px">
      </div>
      <div class="col-4"></div>

      {{-- Tabs --}}
      <div class="col-1"></div>
      <div class="col-10 mb-5">
        <ul class="nav nav-tabs mt-5 d-flex justify-content-center" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="informasi-tab" data-bs-toggle="tab" data-bs-target="#informasi-tab-pane" type="button" role="tab" aria-controls="informasi-tab-pane" aria-selected="true">Informasi</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="progress-tab" data-bs-toggle="tab" data-bs-target="#progress-tab-pane" type="button" role="tab" aria-controls="progress-tab-pane" aria-selected="false">Progress</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="donasi-tab" data-bs-toggle="tab" data-bs-target="#donasi-tab-pane" type="button" role="tab" aria-controls="donasi-tab-pane" aria-selected="false">Donasi</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          {{-- INFORMASI --}}
          <div class="tab-pane fade show active" id="informasi-tab-pane" role="tabpanel" aria-labelledby="informasi-tab" tabindex="0">
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
  
          {{-- PROGRESS --}}
          <div class="tab-pane fade" id="progress-tab-pane" role="tabpanel" aria-labelledby="progress-tab" tabindex="0">
            <div class="row m-4"> 
              <div class="d-flex h5 ms-5">
                Progress Perkara
            </div>
                <div class="d-flex justify-content-center">
                  <div class="col-5">
                  <div class="position-relative m-4 mt-5">
                        <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px; ">
                          <div class="progress-bar" style="width: 100%;"></div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 translate-middle gap-2 bg-transparent" style="width: 10rem;">
                          <button type="button" class=" btn btn-sm rounded-pill progress-btn" style="width: 2.5rem; height:2.5rem; background-color:rgba(232, 123, 47, 1); color: white">1</button>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-50 translate-middle gap-2 bg-transparent" style="width: 10rem">
                          <button type="button" class=" btn btn-sm rounded-pill progress-btn" style="width: 2.5rem; height:2.5rem; background-color:rgba(232, 123, 47, 1); color: white">2</button>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-100 translate-middle gap-2 bg-transparent" style="width: 10rem; ">
                          <button type="button" class=" btn btn-sm rounded-pill progress-btn" style="width: 2.5rem; height:2.5rem;; background-color:rgba(232, 123, 47, 1); color: white">3</button>
                        </div>
                      </div>
                      
                      <div class="position-relative m-4 mt-5 ">
                        <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 translate-middle gap-2 bg-transparent h6" style="width: 10rem">
                          <p class="text-center h6">Pengajuan Perkara ke Pengadilan</p>
                        </div>
  
                        <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-50 translate-middle gap-2 bg-transparent h6" style="width: 10rem">
                          <p class="text-center h6">Persidangan Pertama</p>
                        </div>
                        
                        <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-100 translate-middle gap-2 bg-transparent h6" style="width: 10rem">
                          <p class="text-center h6">Persidangan Kedua</p>
                        </div>
                      </div>

                    </div>
                    
                    <div class="d-flex align-items-center m-3">
                          <i class="fa-solid fa-chevron-right", style="color:rgba(232, 123, 47, 1)"></i>
                      </div>
                  </div>
  
                  <div class="d-flex mt-5 h5 ms-5">
                      Update Perkara
                  </div>
  
                  <form class="d-flex justify-content-center" action="PSB_Progress" method="POST">
                    @csrf
                    <input type="hidden" name="id_kasus" value="1">
                      <div class="col-10">
                        <div class="col-12 mt-3">
                          <label for="inputAddress" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="col-12 d-flex justify-content-between gap-4 mt-3">
                          <div class="col-md-5">
                             <label class="form-label">Jenis Kegiatan</label>
                             <input type="text" class="form-control" name="topik_progress">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label">Agenda Kegiatan</label>
                            <input type="text" class="form-control" name="detail">
                          </div>
                        </div>
  
                       <div class="col-12">
                         <label class="form-label">Catatan</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
                      </div>

                      <button type="submit">SUBMIT</button>
                  </form>

                </div>

                <div class="d-flex mt-5 justify-content-center" >
                  Perkara sudah selesai?
                </div>

                <div class="d-flex justify-content-center mt-2 gap-4 mb-5" style="color:rgba(232, 123, 47, 1)">
                  <i class="fa-solid fa-circle-check fa-4x"></i>
                  <i class="fa-solid fa-circle-xmark fa-4x"></i>
                </div>
          </div>
            </div>

          {{-- DONASI --}}
          <div class="tab-pane fade" id="donasi-tab-pane" role="tabpanel" aria-labelledby="donasi-tab" tabindex="0">
            <div class="d-flex h5 mt-4" >
              Donasi untuk Perkara
            </div>
            <div class="d-flex h7 mt-4" style="color: rgba(232, 123, 47, 1);">
                Rp. 3.000.000,00
            </div>
            <div class="d-flex h7 mt-2">
                Terkumpul dari Rp. 10.000.000,00
            </div>
            
            <div class="progress mt-4" style="height: 20px; background-color:rgb(255, 223, 200); border-radius: 12px">
              <div class="progress-bar" role="progressbar" style="width: 30%; background-color:rgba(232, 123, 47, 1); border-radius: 12px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>  
      </div>
      <div class="col-1"></div>
    </div>
</div>


</x-layout>