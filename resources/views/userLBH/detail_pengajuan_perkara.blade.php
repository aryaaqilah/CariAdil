<link rel="stylesheet" href="{{ asset('style/styles.css') }}">

<x-layout :auth="$auth">
    <div class="container-fluid container">
        <div class="pembatas"></div>
        <div class="row mt-5">
            <div class="col-1">
                <a href="{{ url()->previous() }}" type="button" class="btn btn-orange"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: 1rem;">
                    < Back </a>
            </div>
            <div class="col-10">
                <h5>Pengajuan Perkara</h5>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-10 text-center h1">
                {{-- {{ dd($pengajuanBantuan) }} --}}
                {{-- @foreach ($pengajuanBantuan as $pengajuan) --}}
                <strong>{{ $pengajuanBantuan['nomor_pemohon'] }} = {{ $pengajuanBantuan->nama }}</strong>
                {{-- @endforeach --}}
            </div>

            <div class="d-flex justify-content-center">
                {{-- @foreach ($pengajuanBantuan as $pengajuan) --}}
                <p> Diajukan tanggal {{ $pengajuanBantuan->tanggal }} </p>
                {{-- @endforeach --}}
            </div>

            <div class="d-flex mt-3 justify-content-center">
                <h4>Rincian pengajuan</h4>
            </div>

            <div class="col-10 mb-5">
                <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">Data Pribadi</button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
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
                                            <p>: {{ $pengajuanBantuan->nama }}</p>
                                            <p>: {{ $pengajuanBantuan->nama_panggilan }}</p>
                                            <p>: {{ $pengajuanBantuan->tempat_lahir }}</p>
                                            <p>: {{ $pengajuanBantuan->jenis_kelamin }}</p>
                                            <p>: {{ $pengajuanBantuan->agama }}</p>
                                            <p>: {{ $pengajuanBantuan->status_perkawinan }}</p>
                                            <p>: {{ $pengajuanBantuan->jumlah_anak }}</p>
                                            <p>: {{ $pengajuanBantuan->jumlah_anak_tanggungan }}</p>
                                            <p>: {{ $pengajuanBantuan->alamat_lengkap }}</p>
                                            <p>: {{ $pengajuanBantuan->rt_rw }}</p>
                                            <p>: {{ $pengajuanBantuan->desa_kelurahan }}</p>
                                            <p>: {{ $pengajuanBantuan->kecamatan }}</p>
                                            <p>: {{ $pengajuanBantuan->kabupaten_kota }}</p>
                                            <p>: {{ $pengajuanBantuan->provinsi }}</p>
                                            <p>: {{ $pengajuanBantuan->kode_pos }}</p>
                                            {{-- @endforeach --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Data Tambahan
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
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
                                            <p>: {{ $pengajuanBantuan->identitas_diri }}</p>
                                            <p>: {{ $pengajuanBantuan->nomor_identitas }}</p>
                                            <p>: {{ $pengajuanBantuan->keterangan_tidak_mampu }}</p>
                                            <p>: {{ $pengajuanBantuan->nomor_keterangan_tidak_mampu }}</p>
                                            <p>: {{ $pengajuanBantuan->pekerjaan }}</p>
                                            <p>: {{ $pengajuanBantuan->jumlah_tanggungan }}</p>
                                            <p>: {{ $pengajuanBantuan->pendidikan_terakhir }}</p>
                                            <p>: {{ $pengajuanBantuan->telepon }}</p>
                                            <p>: {{ $pengajuanBantuan->hp }}</p>
                                            {{-- @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Pokok Persoalan
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="item-container">
                                    <div class="row m-3">
                                        {{-- @foreach ($pengajuanBantuan as $pb) --}}
                                        <p>{{ $pengajuanBantuan->uraian }}</P>
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex mt-5 justify-content-center">
                <h4>Terima Perkara Ini?</h4>
            </div>

            <div class="d-flex justify-content-center mt-2 gap-4 mb-5" style="color:rgba(232, 123, 47, 1)">
                <form action="{{ url('/lbh/pengajuan-bantuan-hukum/' . $id_form) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_form" value="{{ $id_form }}">
                    <button style="border: none; background-color: white" type="submit">
                        <i style=" color: rgba(232, 123, 47, 1); " class="fa-solid fa-circle-check fa-4x"></i>
                    </button>
                </form>

                <a href="{{ url()->previous() }}" class="reject-button">
                    <i class="fa-solid fa-xmark fa-2x" style="color:rgba(232, 123, 47, 1)"></i>
                </a>
            </div>
        </div>
    </div>
</x-layout>
