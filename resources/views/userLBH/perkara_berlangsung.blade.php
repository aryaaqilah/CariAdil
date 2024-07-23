<!-- external css -->
<link rel="stylesheet" href="{{ asset('style/perkara_berlangsung.css') }}">

<x-layout :auth="$auth">
    <div class="container py-5">

        <div class="pembatas"></div>

        <div class = "judul">
            <h1>Perkara Berlangsung</h1>
        </div>
        <div class="pembatas"></div>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form class="d-flex" role="search" action="/lbh/perkara-berlangsung/search"
                    enctype="multipart/form-data" method="GET">
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
                                @foreach ($pidana as $kasusPidana)
                                    {{-- @dd($kasusPidana) --}}
                                    <a href="/lbh/perkara-berlangsung/{{ $kasusPidana->id_form }}"
                                        class="col-4" style="text-decoration: none">
                                        {{-- <div class="card-body d-flex flex-column">
                                            <div class="card-date d-flex flex-row-reverse">
                                                <span class="text-secondary">{{ $kasusPidana->tanggal }}</span>
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title">{{ $kasusPidana->nama }}</h5>
                                                <h6 class="card-subtitle mb-2 text-body-secondary">
                                                    {{ $kasusPidana->nomor_pemohon }}</h6>
                                                <p class="card-text">{{ $kasusPidana->uraian }}</p>
                                            </div>
                                        </div> --}}

                                        <div class="card border border-light-subtle" id="card" style="width: 100%;">
                                            <img src="{{ asset('storage/' . $kasusPidana['image_url']) }}" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    {{ $kasusPidana['title'] }}
                                                </h5>
                                                <p class="card-text">{{ \Illuminate\Support\Str::limit($kasusPidana['description'], 120, $end='...') }}.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="d-flex" style="flex-direction: row-reverse;">
                                                        {{$kasusPidana['nama_lbh']}}
                                                        {{-- @foreach ($kasusPidana['nama_lbh'] as $lbh)
                                                            <div class="">{{ $lbh->nama_lbh }}</div>
                                                        @endforeach --}}
                                                    </div>
                                                    <div class="div" style="height: 10px;"></div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            aria-label="Basic example"
                                                            style="width: {{ ($kasusPidana['total'] / $kasusPidana['target_donasi']) * 100 }}%"
                                                            aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="div" style="height: 10px;"></div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="">
                                                            Rp{{ number_format($kasusPidana['total'], 2, ',', '.') }}
                                                        </div>
                                                        <div class="">
                                                            Rp{{ number_format($kasusPidana['target_donasi'], 2, ',', '.') }}
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <h3>Perdata ({{ count($perdata) }})</h3>
                        <div class="row">
                            <div class="row">
                                @foreach ($perdata as $kasusPerdata)
                                {{-- @dd($kasusPidana) --}}
                                <a href="/lbh/perkara-berlangsung/{{ $kasusPerdata->id_form }}" class="card col-3"
                                    style="text-decoration: none">
                                    <div class="card border border-light-subtle" id="card">
                                        <img src="{{ asset('storage/' . $kasusPidana['image_url']) }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                {{ $kasusPidana['title'] }}
                                            </h5>
                                            <p class="card-text">{{ \Illuminate\Support\Str::limit($kasusPidana['description'], 120, $end='...') }}.</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="d-flex" style="flex-direction: row-reverse;">
                                                    @foreach ($kasusPidana['nama_lbh'] as $lbh)
                                                        <div class="">{{ $lbh->nama_lbh }}</div>
                                                    @endforeach
                                                </div>
                                                <div class="div" style="height: 10px;"></div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        aria-label="Basic example"
                                                        style="width: {{ ($kasusPidana['total'] / $kasusPidana['target_donasi']) * 100 }}%"
                                                        aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="div" style="height: 10px;"></div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="">
                                                        Rp{{ number_format($kasusPidana['total'], 2, ',', '.') }}
                                                    </div>
                                                    <div class="">
                                                        Rp{{ number_format($kasusPidana['target_donasi'], 2, ',', '.') }}
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        {{-- <div class="row d-flex justify-content-center py-4">
            <div class="col-1"></div>
            <div class="col-5">
                <p class="d-flex gap-4">
                    <button type="button" class="btn" id="button1" data-bs-toggle="button">Pidana</button>
                    <button type="button" class="btn active" id = "button2" data-bs-toggle="button"
                        aria-pressed="true">Perdata</button>
                </p>
            </div>
            <div class="col-5">
                <form class="d-flex py-3" role="search">
                    <input class="form-control search-input me-2" id = "search_here" type="search"
                        placeholder="Search Here" aria-label="Search">
                    <button class="btn" id="buttonsearch" type="submit">Search</button>
                </form>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-3">
                <h3>Pidana (4)</h3>
            </div>
            <div class="col-8"></div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4 py-4">
            @foreach ($perkaraBerlangsung as $pb)
            <a href="{{route('detail_perkara', $pb->id_kasus)}}" class="card-link">
                <div class="col d-flex justify-content-center">
                    <div class="card border border-light-subtle" id="card">
                        <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$pb->title}}</h5>
                            <p class="card-text">{{$pb->description}}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div> --}}
    </div>
    {{-- End Container  --}}
</x-layout>
