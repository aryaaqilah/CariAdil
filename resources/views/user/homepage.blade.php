<link rel="stylesheet" href="{{ asset('style/store.css') }}">
<link rel="stylesheet" href="{{ asset('/style/homepage.css') }}">
<x-layout :auth="$auth">
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
                        <a href="/berita/kasus-hukum/{{ $kasusHukum->id_kasus }}" class="berita-selengkapnya">Berita
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
            <div class="box-kasus-hukum d-flex justify-content-center gap-5">
                @foreach ($list_kasus_hukum as $kasusHukum)
                <div class="detail-box-kasus-hukum">
                    <div class="img-detail-box-kasus-hukum">
                        <button type="button" class="btn"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;
                            background-color: rgba(232, 123, 47, 1); border-radius: 12px; color: white;
                            margin-left: 1rem; margin-top: 10px">Disidang</button>
                    </div>
                    <div class="judul-kasus">
                        <a class="title-1 text-truncate col-8" href="/berita/kasus-hukum/{{ $kasusHukum->id_kasus }}" style="font-size:1.4rem; text-decoration:none">{{ $kasusHukum->title }}</a>
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
                            background-color: rgba(232, 123, 47, 1); border-radius: 12px; color: white;">View More</a>
                </div>
            </div>
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
            <a href="/form-pengajuan-hukum" type="button" class="btn" id="button_formulir">Formulir Pengajuan</a>
            <a type="button" class="btn btn-outline" id="button_lapor">Laporkan Bukti</a>
        </div>
    </div>
</x-layout>



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/homepage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HomePage</title>
</head>

<body>
    <!-- Navigation Bar -->
    @include('navbar')
    <!-- End Navigation Bar -->

    <!-- Quotes Part  -->
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
                <div class="detail-kasus">
                    <h3 class="judul-kasus">Berita Pertama</h3>
                    <p class="deskripsi-kasus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua...</p>
                    <a href="#" class="berita-selengkapnya">Berita Selengkapnya ></a>
                </div>
                <div class="detail-kasus">
                    <h3 class="judul-kasus">Berita Pertama</h3>
                    <p class="deskripsi-kasus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua...</p>
                    <a href="#" class="berita-selengkapnya">Berita Selengkapnya ></a>
                </div>
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
                <h5 class="deskripsi-informasi">(+62)21 - 3929840</h5>
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

    <!-- Bottom Navigation -->
    <div class="bottom-nav">
        <div class="info-cariadil">
            <h2>CariAdil</h2>
            <p>Ayo bela keadilan dan kesetaraan negara kita bersama CariAdil.</p>
            <!-- Social Media -->
            <div class="social-media-box">
                <div class="social-media">
                    <i class="fa-brands fa-twitter"></i>
                    <span>@CariAdil.Id</span>
                </div>

                <div class="social-media">
                    <i class="fa-brands fa-instagram"></i>
                    <span>@cari.adil.id</span>
                </div>

                <div class="social-media">
                    <i class="fa-brands fa-facebook"></i>
                    <span>CariAdil</span>
                </div>
            </div>
            <div>
                <div>

                </div>
            </div>
        </div>
        <div class="kontak-cariadil">
            <h3>Berlangganan dengan berita dari CariAdil.</h3>

            <div class="input-container">
                <input type="text" class="custom-textfield" placeholder="Enter Your Email...">
                <button class="send-button">
                    <i class="fa-regular fa-paper-plane"></i>
                </button>
            </div>

            <div class="copyright">
                <p>Copyright @2024 by CariAdil</p>
            </div>

        </div>
    </div>
    <script src="script/homepage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html> --}}
