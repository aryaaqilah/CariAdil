<link rel="stylesheet" href="{{ asset('style/homepage.css') }}">

<x-layout>
    <div class="jumbotron1">
        <div class="quotes-part">
            <h1 class="quotes">“Ayo berantas ketidakadilan hukum untuk orang-orang terbelakang dan tertindas dan
                termakan.”</h1>
            <h4 class="from_quotes">-Ojan, S.PPTI</h4>
        </div>

        <div class="divider"></div>

        <div class="kasus">
            <h2 class="headline-kasus">Kasus Terbaru</h2>
            <div class="column-kasus">
                @foreach ($list_kasus_hukum as $kasusHukum)
                    <div class="detail-kasus">
                        <h3 class="judul-kasus">{{ $kasusHukum->title }}</h3>
                        <p class="deskripsi-kasus">{{ $kasusHukum->description }}</p>
                        <a href="/kasus-hukum/{{ $kasusHukum->id_kasus }}" class="berita-selengkapnya">Berita
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
        <div class="jumbo3">
            <h2 class="headline-kasus">Kasus Hukum</h2>
            <div class="box-kasus-hukum">
                <div class="detail-box-kasus-hukum">
                    <div class="img-detail-box-kasus-hukum">
                        <div class="status">Disidang</div>
                    </div>
                    <div class="judul-kasus">
                        <h4 class="title-1">Title 1</h4>
                        <p class="date">6 May 2024</p>
                    </div>
                    <p class="desc-kasus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua...</p>
                </div>

                <div class="detail-box-kasus-hukum">
                    <div class="img-detail-box-kasus-hukum">
                        <div class="status">Disidang</div>
                    </div>
                    <div class="judul-kasus">
                        <h4 class="title-1">Title 1</h4>
                        <p class="date">6 May 2024</p>
                    </div>
                    <p class="desc-kasus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua...</p>
                </div>
            </div>
            <button class="view-more">View More</button>
        </div>
    </div>

    <!-- Terlibat Kasus Hukum? -->
    <div class="jumbotron4">
        <h2 class="quotes">Terlibat dengan Kasus Hukum yang Tidak Adil?</h2>
        <div class="box-desc-terlibat">
            <p class="desc-terlibat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit
                esse cillum dolore eu fugiat nulla pariatur...</p>
        </div>

        <div class="button-lapor-field">
            <button class="button-formulir">Formulir Pengajuan</button>
            <button class="button-lapor">Laporkan Bukti</button>
        </div>
    </div>
</x-layout>