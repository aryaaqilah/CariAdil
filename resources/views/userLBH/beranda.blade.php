<link rel="stylesheet" href="{{ asset('style/homepage.css') }}">

<x-layout :auth="$auth">
    <div class="jumbotron1">
        <div class="quotes-part">
            <h1 class="quotes">“Ayo berantas ketidakadilan hukum untuk orang-orang terbelakang dan tertindas dan
                termakan.”</h1>
        </div>
        <div class="divider"></div>
    </div>

    <!-- Kasus Hukum -->
    <div class="jumbotron3">
        <div class="jumbo3">
            <h2 class="headline-kasus">Kasus Hukum</h2>
            <div class="box-kasus-hukum d-flex gap-5">
                @foreach ($list_kasus_hukum as $kasusHukum)
                    <a class="title-1 text-truncate col-6" href="/lbh/perkara-berlangsung/{{ $kasusHukum->id_kasus }}"
                        style="font-size:1.4rem; text-decoration:none">
                        <div class="box-kasus-hukum d-flex gap-5">
                            <div class="detail-box-kasus-hukum" style="width: 100%">
                                <div class="img-detail-box-kasus-hukum mb-2">
                                    <img src="{{ asset('storage/' . $kasusHukum->image_url) }}" alt="">
                                    <button type="button" class="btn kategori-jenis-perkara"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;
                                background-color: rgba(232, 123, 47, 1); border-radius: 12px; color: white;
                                margin-left: 1rem; margin-top: 10px">{{ $kasusHukum->form->jenis_perkara }}</button>
                                </div>
                                <div class="judul-kasus mb-2" style="text-wrap: pretty; height: 4vh">
                                    {{ \Illuminate\Support\Str::limit($kasusHukum->title, 25, $end = '...') }}
                                    <span class="date d-flex justify-content-end">{{ $kasusHukum->tanggal }}
                                    </span>
                                </div>
                                <p class="desc-kasus" style="font-size: 1.15rem">
                                    {{ \Illuminate\Support\Str::limit($kasusHukum->description, 90, $end = '...') }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col d-flex justify-content-center">
                    <a href="/berita" type="button" class="btn"
                        style="--bs-btn-padding-y: .5rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 1rem;
                            background-color: rgba(232, 123, 47, 1); border-radius: 12px; color: white;">View
                        More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jadwal Persidangan -->
    <div class="jumbotron2">
        <h1 class="hubungi-cariadil">Jadwal</h1>
        <h3 class="butuh-bantuan">Persidangan Selanjutnya</h3>
        <!-- Box Informasi -->
        <div class="box-informasi">
            @foreach ($jadwal as $j)
                <div class="detail-box-informasi">
                    <i class="fa-solid fa-calendar"></i>
                    <h3 class="informasi">{{ $j->topik_progress }}</h3>
                    <h5 class="deskripsi-informasi">{{ \Carbon\Carbon::parse($j->date)->format('d F  Y') }}</h5>
                    <h5 class="deskripsi-informasi">{{ $j->lokasi }}</h5>
                </div>
            @endforeach


        </div>
    </div>

    <!-- Terlibat Kasus Hukum? -->
    <div class="jumbotron4">
        <h2 class="quotes d-flex justify-content-center">Terimakasih sudah membantu <br>
            menegakkan hukum, <br>
            @if (Session::get('user'))
                {{ Session::get('user')['nama_lbh'] }}
            @endif !
        </h2>
    </div>
</x-layout>
