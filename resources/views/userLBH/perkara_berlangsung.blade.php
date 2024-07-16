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
                <form class="d-flex" role="search" action="/berita/search"
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
                        {{-- <h3>Pidana ({{ count($list_kasus_pidana) }})</h3> --}}
                        <div class="row">
                            <div class="row">
                                @foreach ($pidana as $kasusHukum)
                                    {{-- @dd($kasusHukum) --}}
                                    <div class="col-4 d-flex g-5">
                                        <div class="card border border-light-subtle" id="card">
                                            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <a href="/lbh/perkara-berlangsung/{{ $kasusHukum['id_kasus'] }}"
                                                        style="text-decoration: none; color:black">{{ $kasusHukum['title'] }}</a>
                                                </h5>
                                                <p class="card-text">{{ $kasusHukum['description'] }}.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        {{-- <h3>Perdata ({{ count($list_kasus_perdata) }})</h3> --}}
                        <div class="row">
                            <div class="row">
                                @foreach ($perdata as $kasusHukum)
                                    {{-- @dd($kasusHukum) --}}
                                    <div class="col-4 d-flex g-5">
                                        <div class="card border border-light-subtle" id="card">
                                            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <a href="/lbh/perkara-berlangsung/{{ $kasusHukum['id_kasus'] }}"
                                                        style="text-decoration: none; color:black">{{ $kasusHukum['title'] }}</a>
                                                </h5>
                                                <p class="card-text">{{ $kasusHukum['description'] }}.</p>
                                            </div>
                
                                        </div>
                                    </div>
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
