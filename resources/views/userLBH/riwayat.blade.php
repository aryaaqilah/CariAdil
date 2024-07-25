<!-- external css -->
<link rel="stylesheet" href="{{ asset('style/perkara_berlangsung.css') }}">

<x-layout :auth="$auth">
    <div class="container py-5">

        <div class="pembatas"></div>
        <div class = "judul">
            <h1>Riwayat Bantuan Hukum</h1>
        </div>
        <div class="pembatas"></div>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form class="d-flex" role="search" action="/lbh/riwayat-kasus/search" enctype="multipart/form-data"
                    method="GET">
                    @csrf
                    <input class="form-control me-2" style="border-radius: 12px" type="search"
                        placeholder="Search Here" aria-label="Search" name="str">
                    <button class="btn"
                        style="border-radius: 12px; color: white; background-color: rgba(232, 123, 47, 1);"
                        type="submit">Search</button>
                </form>
            </div>
            <div class="col-2"> </div>
        </div>


        <div class="row d-flex py-4">
            <div class="col-5 d-flex gap-4">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" style="padding-x: 1rem; padding-y: 2rem"id="pills-home-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                            aria-controls="pills-home" aria-selected="true">Pidana</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Perdata</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            {{-- <div class="col-1"></div> --}}
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <h3>Pidana ({{ count($pidana) }})</h3>
                        <div class="row">
                            <div class="row">
                                @foreach ($pidana as $kasusPidana)
                                    {{-- @dd($kasusHukum) --}}
                                    <a href="/lbh/riwayat-kasus/{{ $kasusPidana->id_kasus }}" class="card"
                                        style="text-decoration: none; width: 23%; margin-left: 1rem">
                                        <div class="card-body d-flex flex-column">
                                            <div class="card-date d-flex flex-row-reverse">
                                                <span class="text-secondary">{{ $kasusPidana->tanggal }}</span>
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title">{{ $kasusPidana->nama }}</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">
                                                    {{ $kasusPidana->nomor_pemohon }}</h6>
                                                <p class="card-text">{{ $kasusPidana->uraian }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <h3>Perdata ({{ count($perdata) }})</h3>
                        <div class="row">
                            <div class="row">
                                @foreach ($perdata as $kasusPerdata)
                                    {{-- @dd($kasusHukum) --}}
                                    <a href="/lbh/riwayat-kasus/{{ $kasusPerdata->id_kasus }}" class="card"
                                        style="text-decoration: none; width: 23%; margin-left: 1rem">
                                        <div class="card-body d-flex flex-column">
                                            <div class="card-date d-flex flex-row-reverse">
                                                <span class="text-secondary">{{ $kasusPerdata->tanggal }}</span>
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title">{{ $kasusPerdata->nama }}</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">
                                                    {{ $kasusPerdata->nomor_pemohon }}</h6>
                                                <p class="card-text">{{ $kasusPerdata->uraian }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    {{-- End Container  --}}
</x-layout>
