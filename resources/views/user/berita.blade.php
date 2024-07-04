<link rel="stylesheet" href="{{ asset('style/store.css') }}">
<link rel="stylesheet" href="{{ asset('style/perkara_berlangsung.css') }}">

<x-layout :auth="$auth">
    <div class="container py-5">
        <div class="pembatas"></div>
        
        {{-- search bar --}}
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" style="border-radius: 12px" type="search" placeholder="Search Here" aria-label="Search">
                    <button class="btn" style="border-radius: 12px; color: white; background-color: rgba(232, 123, 47, 1);" type="submit">Search</button>
                </form>
            </div>
            <div class="col-1"> </div>
        </div>

        {{-- button proses-selesai --}}
        <div class="row d-flex justify-content-center py-4">
            <div class="col-1"></div>
            <div class="col-5">
                <p class="d-flex gap-4">
                    <button type="button" class="btn" id="button1" data-bs-toggle="button">Proses</button>
                    <button type="button" class="btn active" id = "button2" data-bs-toggle="button"
                        aria-pressed="true">Selesai</button>
                </p>
            </div>
            <div class="col-6"></div>
        </div>

        {{-- Kasusnya --}}
        <div class="row row-cols-1 row-cols-md-2 g-5">
            <div class="col d-flex justify-content-center">
                <div class="card border border-light-subtle" id="card">
                    <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title 1</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4">
                                    ini gambar
                                </div>
                                <div class="col-8">LBH OjanLomba</div>
                            </div>
                            <div class="div" style="height: 10px;"></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="div" style="height: 10px;"></div>
                            <div class="row">
                                <div class="col-6">
                                    Rp xxx.xxx.xxx,00
                                </div>
                                <div class="col-6">
                                    Rp xxx.xxx.xxx,00
                                </div>
                            </div>
                        </li>
                    </ul>
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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4">
                                    ini gambar
                                </div>
                                <div class="col-8">LBH OjanLomba</div>
                            </div>
                            <div class="div" style="height: 10px;"></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="div" style="height: 10px;"></div>
                            <div class="row">
                                <div class="col-6">
                                    Rp xxx.xxx.xxx,00
                                </div>
                                <div class="col-6">
                                    Rp xxx.xxx.xxx,00
                                </div>
                            </div>
                        </li>
                    </ul>
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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4">
                                    ini gambar
                                </div>
                                <div class="col-8">LBH OjanLomba</div>
                            </div>
                            <div class="div" style="height: 10px;"></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="div" style="height: 10px;"></div>
                            <div class="row">
                                <div class="col-6">
                                    Rp xxx.xxx.xxx,00
                                </div>
                                <div class="col-6">
                                    Rp xxx.xxx.xxx,00
                                </div>
                            </div>
                        </li>
                    </ul>
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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4">
                                    ini gambar
                                </div>
                                <div class="col-8">LBH OjanLomba</div>
                            </div>
                            <div class="div" style="height: 10px;"></div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="div" style="height: 10px;"></div>
                            <div class="row">
                                <div class="col-6">
                                    Rp xxx.xxx.xxx,00
                                </div>
                                <div class="col-6">
                                    Rp xxx.xxx.xxx,00
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>