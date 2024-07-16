@extends('components/admin-layout')

@section('title', 'Detail Pengajuan Perkara')

@section('content')
    {{-- Tabs --}}
    <div class="row">
        <div class="col-11 mt-5 mb-5 ms-5">
            <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" style="background-color: #EFEFEF">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Data
                            Pribadi</button>
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
                                        @foreach ($perkara as $p)
                                            <p>: {{ $p->nama }}</p>
                                            <p>: {{ $p->nama_panggilan }}</p>
                                            <p>: {{ $p->tempat_lahir }}</p>
                                            <p>: {{ $p->jenis_kelamin }}</p>
                                            <p>: {{ $p->agama }}</p>
                                            <p>: {{ $p->status_perkawinan }}</p>
                                            <p>: {{ $p->jumlah_anak }}</p>
                                            <p>: {{ $p->jumlah_anak_tanggungan }}</p>
                                            <p>: {{ $p->alamat_lengkap }}</p>
                                            <p>: {{ $p->rt_rw }}</p>
                                            <p>: {{ $p->desa_kelurahan }}</p>
                                            <p>: {{ $p->kecamatan }}</p>
                                            <p>: {{ $p->kabupaten_kota }}</p>
                                            <p>: {{ $p->provinsi }}</p>
                                            <p>: {{ $p->kode_pos }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" style="background-color: #EFEFEF">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Data Tambahan
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="item-container">
                                <div class="row m-3">
                                    <div class="col-5">
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
                                    <div class="col-7">
                                        @foreach ($perkara as $p)
                                            <p>: {{ $p->identitas_diri }}</p>
                                            <p>: {{ $p->nomor_identitas }}</p>
                                            <p>: {{ $p->keterangan_tidak_mampu }}</p>
                                            <p>: {{ $p->nomor_keterangan_tidak_mampu }}</p>
                                            <p>: {{ $p->pekerjaan }}</p>
                                            <p>: {{ $p->jumlah_tanggungan }}</p>
                                            <p>: {{ $p->pendidikan_terakhir }}</p>
                                            <p>: {{ $p->telepon }}</p>
                                            <p>: {{ $p->hp }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" style="background-color: #EFEFEF">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Pokok Persoalan
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="item-container">
                                <div class="row m-3">
                                    @foreach ($perkara as $pb)
                                        <p>{{ $pb->uraian }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="pembatas80"></div>
        <div class="col-11">
            <div class="row d-flex ms-5">
                <p>Tambahkan Informasi</p>
                <input class="form-control" type="text" placeholder="Tambahkan Informasi" aria-label="Search"
                    style="border: 1px solid rgba(232, 123, 47, 1); border-radius: 12px; background-color: #EFEFEF">
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3 gap-4 mb-4" style="color:rgba(232, 123, 47, 1)">
            <form action="{{ url('/lbh/pengajuan-bantuan-hukum/') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_form" value="">
                {{-- <button type="submit"> --}}
                <div class="accept">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-check2" viewBox="0 0 16 16" stroke-width="3">
                        <path
                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                    </svg>
                </div>
                {{-- </button> --}}
            </form>
            <div class="deny">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
                    viewBox="0 0 16 16">
                    <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                </svg>
            </div>
        </div>
    </div>
@endsection