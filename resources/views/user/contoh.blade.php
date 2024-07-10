<!-- external css -->
<link rel="stylesheet" href="{{ asset('style/perkara_berlangsung.css') }}">

<x-layout :auth="$auth">
    <div class="container py-5">

        <div class = "judul">
            <h1>Pengajuan Bantuan Hukum</h1>
        </div>

        <div class="row d-flex justify-content-center py-4">
            <div class="col-1"></div>
            <div class="col-5 d-flex gap-4">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" style="padding-x: 1rem; padding-y: 2rem"id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pidana</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Perdata</button>
                    </li>
                </ul>
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
            <div class="col-10">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <h3>Pidana (4)</h3>
                        <div class="row row-cols-1 row-cols-md-2 g-4 py-4">
                            <div class="col d-flex justify-content-center">
                                <div class="card border border-light-subtle" id="card">
                                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 1</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col d-flex justify-content-center">
                                <div class="card border border-light-subtle" id="card">
                                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 2</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="card border border-light-subtle" id="card">
                                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 3</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="card border border-light-subtle" id="card">
                                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 4</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <h3>Perdata (4)</h3>
                        <div class="row row-cols-1 row-cols-md-2 g-4 py-4">
                            <div class="col d-flex justify-content-center">
                                <div class="card border border-light-subtle" id="card">
                                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 89217489174891</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col d-flex justify-content-center">
                                <div class="card border border-light-subtle" id="card">
                                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 2</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="card border border-light-subtle" id="card">
                                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 3</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="card border border-light-subtle" id="card">
                                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 4</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





    </div>
    {{-- End Container  --}}
</x-layout>


<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <h3>Pidana (4)</h3>
        <div class="row">
            <div class="row g-5">
                @foreach ($list_kasus_hukum as $kasusHukum)
                {{-- @dd($kasusHukum) --}}
                        <div class="col-4 d-flex">
                            <div class="card border border-light-subtle" id="card">
                                <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="/berita/kasus-hukum/{{ $kasusHukum['id_kasus'] }}" style="text-decoration: none; color:black">{{  $kasusHukum['title'] }}</a></h5>
                                    <p class="card-text">{{  $kasusHukum['description'] }}.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="d-flex" style="flex-direction: row-reverse;">
                                            @foreach ($kasusHukum['nama_lbh'] as $lbh)
                                                <div class="">{{ $lbh->nama_lbh }}</div>
                                            @endforeach
                                        </div>
                                        <div class="div" style="height: 10px;"></div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                                style="width: {{ $kasusHukum['total']/ $kasusHukum['target_donasi'] *100 }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="div" style="height: 10px;"></div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                Rp. {{ number_format( $kasusHukum['total'] ,2,",",".")}}
                                            </div>
                                            <div class="">
                                                Rp. {{ number_format( $kasusHukum['target_donasi'] ,2,",",".")}}
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                <div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <h3>Perdata (4)</h3>
            TEST
    </div>
</div>
