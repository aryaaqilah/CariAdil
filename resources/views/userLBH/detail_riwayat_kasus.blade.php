<link rel="stylesheet" href="{{ asset('style/styles.css') }}">

<x-layout :auth="$auth">
    <div class="container-fluid container">
        <div class="pembatas"></div>
        <div class="row mt-5">
            <div class="col-1"></div>
            <div class="col-1">
                <a href="{{ url()->previous() }}" type="button" class="btn btn-orange"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: 1rem;">
                    < Back</a>
            </div>
            <div class="col-10">
                <h5>Perkara Berlangsung</h5>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-10 text-center h1">
                {{-- @foreach ($perkaraBerlangsung as $pb) --}}
                <strong>{{ $perkaraBerlangsung->title }}</strong>
                {{-- @endforeach --}}
            </div>

            <div class="d-flex justify-content-center">
                {{-- @foreach ($perkaraBerlangsung as $pb) --}}
                <p> Diterima tanggal {{ $perkaraBerlangsung->tanggal }} </p>
                {{-- @endforeach --}}
            </div>

            <div class="col-4"></div>
            <div class="col-4">
                <img src="{{ asset('storage/' . $perkaraBerlangsung->image_url) }}" class="img-fluid" alt="...",
                    style="height: 100%; width: 100%; border-radius: 12px">
            </div>
            <div class="col-4"></div>

            {{-- Tabs --}}
            <div class="col-1"></div>
            <div class="col-10 mb-5">
                <ul class="nav nav-tabs mt-5 d-flex justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="informasi-tab" data-bs-toggle="tab"
                            data-bs-target="#informasi-tab-pane" type="button" role="tab"
                            aria-controls="informasi-tab-pane" aria-selected="true">Informasi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="progress-tab" data-bs-toggle="tab"
                            data-bs-target="#progress-tab-pane" type="button" role="tab"
                            aria-controls="progress-tab-pane" aria-selected="false">Progress</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="donasi-tab" data-bs-toggle="tab" data-bs-target="#donasi-tab-pane"
                            type="button" role="tab" aria-controls="donasi-tab-pane"
                            aria-selected="false">Donasi</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    {{-- INFORMASI --}}
                    <div class="tab-pane fade show active" id="informasi-tab-pane" role="tabpanel"
                        aria-labelledby="informasi-tab" tabindex="0">
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
                                                    {{-- @foreach ($perkaraBerlangsung as $pb) --}}
                                                    <p>: {{ $perkaraBerlangsung->nama }}</p>
                                                    <p>: {{ $perkaraBerlangsung->nama_panggilan }}</p>
                                                    <p>: {{ $perkaraBerlangsung->tempat_lahir }}</p>
                                                    <p>: {{ $perkaraBerlangsung->jenis_kelamin }}</p>
                                                    <p>: {{ $perkaraBerlangsung->agama }}</p>
                                                    <p>: {{ $perkaraBerlangsung->status_perkawinan }}</p>
                                                    <p>: {{ $perkaraBerlangsung->jumlah_anak }}</p>
                                                    <p>: {{ $perkaraBerlangsung->jumlah_anak_tanggungan }}</p>
                                                    <p>: {{ $perkaraBerlangsung->alamat_lengkap }}</p>
                                                    <p>: {{ $perkaraBerlangsung->rt_rw }}</p>
                                                    <p>: {{ $perkaraBerlangsung->desa_kelurahan }}</p>
                                                    <p>: {{ $perkaraBerlangsung->kecamatan }}</p>
                                                    <p>: {{ $perkaraBerlangsung->kabupaten_kota }}</p>
                                                    <p>: {{ $perkaraBerlangsung->provinsi }}</p>
                                                    <p>: {{ $perkaraBerlangsung->kode_pos }}</p>
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
                                                    {{-- @foreach ($perkaraBerlangsung as $pb) --}}
                                                    <p>: {{ $perkaraBerlangsung->identitas_diri }}</p>
                                                    <p>: {{ $perkaraBerlangsung->nomor_identitas }}</p>
                                                    <p>: {{ $perkaraBerlangsung->keterangan_tidak_mampu }}</p>
                                                    <p>: {{ $perkaraBerlangsung->nomor_keterangan_tidak_mampu }}</p>
                                                    <p>: {{ $perkaraBerlangsung->pekerjaan }}</p>
                                                    <p>: {{ $perkaraBerlangsung->jumlah_tanggungan }}</p>
                                                    <p>: {{ $perkaraBerlangsung->pendidikan_terakhir }}</p>
                                                    <p>: {{ $perkaraBerlangsung->telepon }}</p>
                                                    <p>: {{ $perkaraBerlangsung->hp }}</p>
                                                    {{-- @endforeach --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        Pokok Persoalan
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="item-container">
                                            <div class="row m-3">
                                                {{-- @foreach ($perkaraBerlangsung as $pb) --}}
                                                <p>{{ $perkaraBerlangsung->uraian }}</p>
                                                {{-- @endforeach --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- PROGRESS --}}
                    <div class="tab-pane fade" id="progress-tab-pane" role="tabpanel" aria-labelledby="progress-tab"
                        tabindex="0">
                        <div class="row m-4">
                            <div class="d-flex h5 ms-5">
                                Progress Perkara
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-10" style="">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-12">
                                            <ul
                                                class="progress-tracker progress-tracker--text progress-tracker--center">
                                                @foreach ($progress as $index => $prog)
                                                    <li class="progress-step is-complete">
                                                        <div style="color: white" class="progress-marker"
                                                            data-text="{{ $index + 1 }}"></div>
                                                        <div class="progress-text">
                                                            <h4 style="word-wrap: break-word;" class="progress-title">
                                                                {{ $prog->topik_progress }}</h4>
                                                            <h5 class="deskripsi-informasi">
                                                                {{ \Carbon\Carbon::parse($prog->date)->format('d F  Y') }}
                                                            </h5>
                                                            <h5 class="deskripsi-informasi">{{ $prog->lokasi }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                {{-- {{ $progress->links() }} --}}

                                {{-- <div class="d-flex align-items-center m-3">
                          <i class="fa-solid fa-chevron-right", style="color:rgba(232, 123, 47, 1)"></i>
                      </div> --}}
                            </div>

                        </div>
                    </div>

                    {{-- DONASI --}}
                    <div class="tab-pane fade" id="donasi-tab-pane" role="tabpanel" aria-labelledby="donasi-tab"
                        tabindex="0">
                        <div class="d-flex h5 mt-4">
                            Donasi untuk Perkara
                        </div>
                        <div class="d-flex h7 mt-4" style="color: rgba(232, 123, 47, 1);">
                            Rp {{ number_format($total, 2, ',', '.') }}
                        </div>
                        <div class="d-flex h7 mt-2">
                            Terkumpul dari Rp {{ number_format($kasusHukum->target_donasi, 2, ',', '.') }}
                        </div>

                        <div class="progress mt-4"
                            style="height: 20px; background-color:rgb(255, 223, 200); border-radius: 12px">
                            <div class="progress-bar" role="progressbar"
                                style="width: {{ ($total / $kasusHukum->target_donasi) * 100 }}%; background-color:rgba(232, 123, 47, 1); border-radius: 12px"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

        </div>

    </div>

</x-layout>
