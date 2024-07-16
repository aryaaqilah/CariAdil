<link rel="stylesheet" href="{{ asset('style/store.css') }}">
<link rel="stylesheet" href="{{ asset('/style/homepage.css') }}">
<x-layout :auth="$auth">
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron1">
                <div class="quotes-part">
                    <h1 class="quotes">“Ayo berantas ketidakadilan hukum untuk orang-orang terbelakang dan tertindas dan
                        termakan.”</h1>
                    <h4 class="from_quotes">-Ojan, S.PPTI</h4>
                </div>
                <div class="divider"></div>
                <div class="kasus">
                    <h2 class="headline-kasus">Kasus Terbaru</h2>
                    <div class="pembatas20"></div>
                    <div class="column-kasus">
                        @foreach ($list_kasus_hukum as $kasusHukum)
                            <div class="detail-kasus">
                                <h3 class="judul-kasus">{{ $kasusHukum->title }}</h3>
                                <p class="deskripsi-kasus">{{ $kasusHukum->description }}</p>
                                <a href="/berita/kasus-hukum/{{ $kasusHukum->id_kasus }}"
                                    class="berita-selengkapnya">Berita
                                    Selengkapnya ></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Hubungi CariAdil -->
            <div class="jumbotron2">
                <h3 class="butuh-bantuan">Butuh Bantuan?</h3>
                <h1 class="hubungi-cariadil">Hubungi CariAdil</h1>
                <!-- Box Informasi -->
                <div class="box-informasi">
                    <div class="detail-box-informasi">
                        <i class="fa-solid fa-phone"></i>
                        <h3 class="informasi">Nomor Telepon</h3>
                        <h5 class="deskripsi-informasi">(+62)21-3929840</h5>
                    </div>

                    <div class="detail-box-informasi">
                        <i class="fa-solid fa-envelope"></i>
                        <h3 class="informasi">Email</h3>
                        <h5 class="deskripsi-informasi">CariAdil@gmail.com</h5>
                    </div>

                    <div class="detail-box-informasi">
                        <i class="fa-solid fa-location-dot"></i>
                        <h3 class="informasi">Lokasi</h3>
                        <h5 class="deskripsi-informasi">Rumah Talenta BCA</h5>
                    </div>
                </div>
                <p class="aturan-syarat">Aturan dan ketentuan S&K berlaku*</p>
            </div>
            <!-- Kasus Hukum -->
            <div class="jumbotron3">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 mt-4">
                        <h2 class="headline-kasus">Kasus Hukum</h2>

                        <div class="row">
                            @foreach ($list_kasus_hukum as $kasusHukum)
                                <div class="col-6 box-kasus-hukum d-flex gap-5">
                                    <div class="detail-box-kasus-hukum" style="width: 23rem">
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
                                            <p class="date col-4 d-flex justify-content-end">{{ $kasusHukum->tanggal }}
                                            </p>
                                        </div>
                                        <p class="desc-kasus">{{ $kasusHukum->description }}</p>
                                    </div>
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
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
        <!-- Terlibat Kasus Hukum? -->
        <div class="jumbotron4">
            <h2 class="quotes">Terlibat dengan Kasus Hukum yang Tidak Adil?</h2>
            <div class="box-desc-terlibat">
                <p class="desc-terlibat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate
                    velit
                    esse cillum dolore eu fugiat nulla pariatur...</p>
            </div>

            <div class="button-lapor-field">
                <a href="/form-pengajuan-hukum" type="button" class="btn" id="button_formulir">Formulir
                    Pengajuan</a>
                <a type="button" class="btn btn-outline" id="button_lapor">Laporkan Bukti</a>
            </div>
        </div>
    </div>
</x-layout>
