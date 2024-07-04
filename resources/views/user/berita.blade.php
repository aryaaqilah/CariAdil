<link rel="stylesheet" href="{{ asset('style/store.css') }}">
<link rel="stylesheet" href="{{ asset('style/perkara_berlangsung.css') }}">

<x-layout :auth="$auth">
    <div class="container py-5">
        <div class="pembatas"></div>

        {{-- search bar --}}
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" style="border-radius: 12px" type="search" placeholder="Search Here" aria-label="Search">
                    <button class="btn" style="border-radius: 12px; color: white; background-color: rgba(232, 123, 47, 1);" type="submit">Search</button>
                </form>
            </div>
            <div class="col-2"> </div>
        </div>

        {{-- button proses-selesai --}}
        <div class="row d-flex py-4">
            <div class="col-3">
                <p class="d-flex gap-4">
                    <button type="button" class="btn" id="button1" data-bs-toggle="button">Proses</button>
                    <button type="button" class="btn active" id = "button2" data-bs-toggle="button"
                        aria-pressed="true">Selesai</button>
                </p>
            </div>
        </div>

        {{-- Kasusnya --}}
        <div class="row g-5">
            @foreach ($list_kasus_hukum as $kasusHukum)
                    <div class="col-4 d-flex">
                        <div class="card border border-light-subtle" id="card">
                            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="/berita/kasus-hukum/{{ $kasusHukum->id_kasus }}" style="text-decoration: none; color:black">{{ $kasusHukum->title }}</a></h5>
                                <p class="card-text">{{ $kasusHukum->description }}.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex" style="flex-direction: row-reverse;">
                                        <div class="">{{ $kasusHukum->nama_lbh }}</div>
                                    </div>
                                    <div class="div" style="height: 10px;"></div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="div" style="height: 10px;"></div>
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            Rp xxx.xxx.xxx,00
                                        </div>
                                        <div class="">
                                            {{ $kasusHukum->target_donasi }}
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
</x-layout>
