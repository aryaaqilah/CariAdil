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
                    <div class="detail-box-kasus-hukum">
                        <div class="img-detail-box-kasus-hukum">
                            <button type="button" class="btn"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;
                            background-color: rgba(232, 123, 47, 1); border-radius: 12px; color: white;
                            margin-left: 1rem; margin-top: 10px">Disidang</button>
                        </div>
                        <div class="judul-kasus">
                            <a class="title-1 text-truncate col-8"
                                href="/berita/kasus-hukum/{{ $kasusHukum->id_kasus }}"
                                style="font-size:1.4rem; text-decoration:none">{{ $kasusHukum->title }}</a>
                            <p class="date col-4 d-flex justify-content-end">{{ $kasusHukum->tanggal }}</p>
                        </div>
                        <p class="desc-kasus">{{ $kasusHukum->description }}</p>
                    </div>
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
                <h3 class="informasi">{{$}}</h3>
                <h5 class="deskripsi-informasi">10:00 - 20:00</h5>
                <h5 class="deskripsi-informasi">PN Jakarta Pusat</h5>
            </div>
            @endforeach

            
        </div>
    </div>

    <!-- Terlibat Kasus Hukum? -->
    <div class="jumbotron4">
        <h2 class="quotes d-flex justify-content-center">Terimakasih sudah membantu <br>
            menegakkan hukum, <br>
            LBH OjanLomba!</h2>
    </div>
</x-layout>
