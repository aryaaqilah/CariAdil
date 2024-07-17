<link rel="stylesheet" href="{{ asset('/style/styles.css') }}">

<x-layout :auth="$auth">
    <div class="container-fluid" id="containerTentang">
        <div class="text-center">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2">
                    <div class="text-center" id="logoTentang">
                        <img src="/assets/images/logoCariAdil.png" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-5"></div>
                <div class="col-12 mt-3">
                    <h1>Cari Adil</h1>
                    <p>Adalah sebuah organisasi nonprofit yang bertujuan untuk membantu
                        orang-orang yang butuh bantuan secara hukum. <br> Kami bekerja sama dengan LBH
                        terbaik di Indonesia untuk mewujudkan penanganan hukum terbaik bagi Anda. <br>
                        Cari Adil juga akan memberikan wadah bagi pada simpatisan untuk berdonasi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>

{{-- /assets/images/Logo Cari Adil 1.png --}}
