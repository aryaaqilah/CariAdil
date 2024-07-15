@extends('components/admin-layout')

@section('title', 'Detail Pengajuan Perkara')

@section('content')
    {{-- Tabs --}}
    <div class="col-1"></div>
    <div class="col-10 mb-5">
      <ul class="nav nav-tabs mt-5 d-flex justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="informasi-tab" data-bs-toggle="tab" data-bs-target="#informasi-tab-pane" type="button" role="tab" aria-controls="informasi-tab-pane" aria-selected="true">Informasi</button>
        </li>
        {{-- <li class="nav-item" role="presentation">
          <button class="nav-link" id="progress-tab" data-bs-toggle="tab" data-bs-target="#progress-tab-pane" type="button" role="tab" aria-controls="progress-tab-pane" aria-selected="false">Progress</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="donasi-tab" data-bs-toggle="tab" data-bs-target="#donasi-tab-pane" type="button" role="tab" aria-controls="donasi-tab-pane" aria-selected="false">Donasi</button>
        </li> --}}
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
                        {{-- @foreach ($perkaraBerlangsung as $pb) --}}
                        {{-- <p>: {{$perkaraBerlangsung->nama}}</p>
                        <p>: {{$perkaraBerlangsung->nama_panggilan}}</p>
                        <p>: {{$perkaraBerlangsung->tempat_lahir}}</p>
                        <p>: {{$perkaraBerlangsung->jenis_kelamin}}</p>
                        <p>: {{$perkaraBerlangsung->agama}}</p>
                        <p>: {{$perkaraBerlangsung->status_perkawinan}}</p>
                        <p>: {{$perkaraBerlangsung->jumlah_anak}}</p>
                        <p>: {{$perkaraBerlangsung->jumlah_anak_tanggungan}}</p>
                        <p>: {{$perkaraBerlangsung->alamat_lengkap}}</p>
                        <p>: {{$perkaraBerlangsung->RT_RW}}</p>
                        <p>: {{$perkaraBerlangsung->Desa_Kelurahan}}</p>
                        <p>: {{$perkaraBerlangsung->kecamatan}}</p>
                        <p>: {{$perkaraBerlangsung->Kabupaten_Kota}}</p>
                        <p>: {{$perkaraBerlangsung->provinsi}}</p>
                        <p>: {{$perkaraBerlangsung->kode_pos}}</p>   --}}
                        {{-- @endforeach --}}
                        <p>Hallo semua</p>
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
                        {{-- @foreach ($perkaraBerlangsung as $pb) --}}
                        {{-- <p>: {{$perkaraBerlangsung->identitas_diri}}</p>
                        <p>: {{$perkaraBerlangsung->nomor_identitas}}</p>
                        <p>: {{$perkaraBerlangsung->keterangan_tidak_mampu}}</p>
                        <p>: {{$perkaraBerlangsung->nomor_keterangan_tidak_mampu}}</p>
                        <p>: {{$perkaraBerlangsung->pekerjaan}}</p>
                        <p>: {{$perkaraBerlangsung->jumlah_tanggungan}}</p>
                        <p>: {{$perkaraBerlangsung->pendidikan_terakhir}}</p>
                        <p>: {{$perkaraBerlangsung->telepon}}</p>
                        <p>: {{$perkaraBerlangsung->HP}}</p> --}}
                        <p>Hallo semua</p>
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
                      {{-- @foreach ($perkaraBerlangsung as $pb) --}}
                      {{-- <p>{{$perkaraBerlangsung->uraian}}</p> --}}
                      <p>Hallo hallo</p>
                      {{-- @endforeach --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection