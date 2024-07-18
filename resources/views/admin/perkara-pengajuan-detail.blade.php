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
                                        <p>: {{ $perkara->nama }}</p>
                                        <p>: {{ $perkara->nama_panggilan }}</p>
                                        <p>: {{ $perkara->tempat_lahir }}</p>
                                        <p>: {{ $perkara->jenis_kelamin }}</p>
                                        <p>: {{ $perkara->agama }}</p>
                                        <p>: {{ $perkara->status_perkawinan }}</p>
                                        <p>: {{ $perkara->jumlah_anak }}</p>
                                        <p>: {{ $perkara->jumlah_anak_tanggungan }}</p>
                                        <p>: {{ $perkara->alamat_lengkap }}</p>
                                        <p>: {{ $perkara->rt_rw }}</p>
                                        <p>: {{ $perkara->desa_kelurahan }}</p>
                                        <p>: {{ $perkara->kecamatan }}</p>
                                        <p>: {{ $perkara->kabupaten_kota }}</p>
                                        <p>: {{ $perkara->provinsi }}</p>
                                        <p>: {{ $perkara->kode_pos }}</p>
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
                                        <p>: {{ $perkara->identitas_diri }}</p>
                                        <p>: {{ $perkara->nomor_identitas }}</p>
                                        <p>: {{ $perkara->keterangan_tidak_mampu }}</p>
                                        <p>: {{ $perkara->nomor_keterangan_tidak_mampu }}</p>
                                        <p>: {{ $perkara->pekerjaan }}</p>
                                        <p>: {{ $perkara->jumlah_tanggungan }}</p>
                                        <p>: {{ $perkara->pendidikan_terakhir }}</p>
                                        <p>: {{ $perkara->telepon }}</p>
                                        <p>: {{ $perkara->hp }}</p>
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
                                    <p>{{ $perkara->uraian }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="pembatas80"></div>
        <div class="d-flex justify-content-center mt-3 gap-4 mb-4 col-11" style="color:rgba(232, 123, 47, 1)">
            <form action="/admin/pengajuan-perkara/{{ $perkara->id_form }}" method="POST" class="row ms-5"
                style="width: 100%">
                @csrf
                @method('PUT')

                <label for="jenis_perkara">Tentukan Jenis Perkara</label>
                <select class="form-select" name="jenis_perkara" id="jenis_perkara" aria-label="Default select example"
                    style="width: 100%">
                    <option selected disabled>-- Pilih Jenis Perkara --</option>
                    <option value="Pidana">Pidana</option>
                    <option value="Perdata">Perdata</option>
                </select>


                <input type="hidden" name="id_form" value="">
                {{-- <button type="submit"> --}}
                <div class="button-wrapper d-flex justify-content-center mt-3">
                    <button type="submit">
                        <div class="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check2" viewBox="0 0 16 16" stroke-width="3">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </div>
                    </button>
                    <a href="{{ url()->previous() }}">
                        <div class="deny">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                            </svg>
                        </div>
                    </a>
                </div>
                {{-- </button> --}}
            </form>
        </div>
    </div>
@endsection
