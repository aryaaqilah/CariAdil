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
        {{-- @foreach ($pengajuanBantuan as $pengajuan) --}}
        <strong>{{$pengajuanBantuan->nomor_pemohon}} = {{$pengajuanBantuan->nama}}</strong>
        {{-- @endforeach --}}
      </div>

      <div class="d-flex justify-content-center gap-3 my-3">
        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1); font-size: 14PX">Pidana</span>
        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1); font-size: 14PX">Perebutan Hak Asuh Anak</span>
        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1); font-size: 14PX">Penggugat</span>
      </div>

      <div class="d-flex justify-content-center">
        {{-- @foreach ($pengajuanBantuan as $pengajuan) --}}
        <p> Diajukan tanggal {{$pengajuanBantuan->tanggal}} </p>
        {{-- @endforeach --}}
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
        <form action="{{ url('/lbh/pengajuan-bantuan-hukum/') }}" method="POST">
          @csrf
          @method('PUT')
          <input type="hidden" name="id_kasus" value="{{ $pengajuanBantuan->id_kasus }}"> 
          <button type="submit">
            <i class="fa-solid fa-circle-check fa-4x"></i>
          </button>
        </form>
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
                      {{-- @foreach ($pengajuanBantuan as $pb) --}}
                      <p>: {{$pengajuanBantuan->nama}}</p>
                      <p>: {{$pengajuanBantuan->nama_panggilan}}</p>
                      <p>: {{$pengajuanBantuan->tempat_lahir}}</p>
                      <p>: {{$pengajuanBantuan->jenis_kelamin}}</p>
                      <p>: {{$pengajuanBantuan->agama}}</p>
                      <p>: {{$pengajuanBantuan->status_perkawinan}}</p>
                      <p>: {{$pengajuanBantuan->jumlah_anak}}</p>
                      <p>: {{$pengajuanBantuan->jumlah_anak_tanggungan}}</p>
                      <p>: {{$pengajuanBantuan->alamat_lengkap}}</p>
                      <p>: {{$pengajuanBantuan->RT_RW}}</p>
                      <p>: {{$pengajuanBantuan->Desa_Kelurahan}}</p>
                      <p>: {{$pengajuanBantuan->kecamatan}}</p>
                      <p>: {{$pengajuanBantuan->Kabupaten_Kota}}</p>
                      <p>: {{$pengajuanBantuan->provinsi}}</p>
                      <p>: {{$pengajuanBantuan->kode_pos}}</p>  
                      {{-- @endforeach --}}

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
                      {{-- @foreach ($pengajuanBantuan as $pb) --}}
                      <p>: {{$pengajuanBantuan->identitas_diri}}</p>
                      <p>: {{$pengajuanBantuan->nomor_identitas}}</p>
                      <p>: {{$pengajuanBantuan->keterangan_tidak_mampu}}</p>
                      <p>: {{$pengajuanBantuan->nomor_keterangan_tidak_mampu}}</p>
                      <p>: {{$pengajuanBantuan->pekerjaan}}</p>
                      <p>: {{$pengajuanBantuan->jumlah_tanggungan}}</p>
                      <p>: {{$pengajuanBantuan->pendidikan_terakhir}}</p>
                      <p>: {{$pengajuanBantuan->telepon}}</p>
                      <p>: {{$pengajuanBantuan->HP}}</p>
                      {{-- @endforeach --}}
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
                    {{-- @foreach ($pengajuanBantuan as $pb) --}}
                    <p>{{$pengajuanBantuan->uraian}}</P>
                    {{-- @endforeach --}}
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
  
