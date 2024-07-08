<link rel="stylesheet" href="{{ asset('style/store.css') }}">
<link rel="stylesheet" href="{{ asset('style/styles.css') }}">

<x-layout :auth="$auth">
    <div class="container">
        <form action="/berita/donasi/{{ $id }}/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="pembatas80"></div>
        <div class="row mt-4">
            <div class="col-1"></div>
            <div class="col-5">
                <img src="https://media.istockphoto.com/id/1449333398/id/foto/pengusaha-berjabat-tangan-pengacara-mitra-atau-pengacara-mendiskusikan-perjanjian-kontrak.jpg?s=1024x1024&w=is&k=20&c=64UHwZ1G3XqegEU-SbdeELLEXKQNYbivpkvHrKJQLcQ=" class="img-fluid" alt="..." style="height: 100%; width: 100%">
            </div>
            <div class="col-5">
                <h2>{{ $kasusHukum->title }}</h2>
            </div>
            <div class="col-1"></div>

            {{-- Masukkan nominal donasi --}}

            <div class="col-12 d-flex justify-content-center mt-5">
                <h4>Masukkan nominal donasi</h4>
            </div>
            <div class="col-3"></div>
            <div class="col-6 mt-2">
                <input type="text" id="nominalTF" class="form-control" required name="nominal">
            </div>
            <div class="col-3"></div>

            {{-- Pilih nominal donasi --}}
            <div class="col d-flex justify-content-center mt-5">
                <h5>Atau pilih nominal donasi</h5>
            </div>
        </div>


        {{-- Jumlah donasi --}}
        <div class="row d-flex justify-content-center mx-5">
            <div class="col-4 d-flex justify-content-center">
                <div class="input-containers">
                    <input type="radio" id="nominal1" name="radio">
                    <div class="radio-title">
                        <label for="nominal1">10.000</label>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="input-containers">
                    <input type="radio" id="nominal2" name="radio">
                    <div class="radio-title">
                        <label for="nominal2">20.000</label>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="input-containers">
                    <input type="radio" id="nominal3" name="radio">
                    <div class="radio-title">
                        <label for="nominal3">50.000</label>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="input-containers">
                    <input type="radio" id="nominal4" name="radio">
                    <div class="radio-title">
                        <label for="nominal4">100.000</label>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="input-containers">
                    <input type="radio" id="nominal5" name="radio">
                    <div class="radio-title">
                        <label for="nominal5">200.000</label>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="input-containers">
                    <input type="radio" id="nominal6" name="radio">
                    <div class="radio-title">
                        <label for="nominal6">500.000</label>
                    </div>
                </div>
            </div>
        </div>


        {{-- Metode Pembayaran --}}
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <h5>Metode Pembayaran</h5>
            </div>
            <div class="col-1"></div>
            <div class="col-10">
                <div class="container-bank">
                    <div class="row">
                        <div class="col d-flex justify-content-center mt-2">
                            <h6>Bank Transfer</h6>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6 d-flex justify-content-center">
                            <div class="input-containers">
                                <input type="radio" id="bank", name="radio-bank">
                                <div class="radio-title">
                                    <img src="/assets/images/bank-bca.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-6 d-flex justify-content-center">
                            <div class="input-containers">
                                <input type="radio" id="bank", name="radio-bank">
                                <div class="radio-title">
                                    <img src="/assets/images/bank-bri.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

             {{-- Profil Donatur --}}
            <div class="col-1"></div>
            <div class="col-10 mt-5">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h5>Profil Donatur</h5>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" required name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nomor_telepon" placeholder="Nomor Telepon" required name="nomor_telepon">
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

            {{-- Doa --}}
            <div class="col-1"></div>
            <div class="col-10 mt-5 mb-3">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="h5">Dukungan atau doamu (optional)</div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="dukungan" rows="5" required name="dukungan"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

            <div class="col-1"></div>
            <div class="col-10" >
                <div class="container-total d-flex align-items-center" style="height : 2rem">
                    <div class="col-10"></div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <div id="totalBayar" style="font-weight: bold">Total : Rp. 0,00</div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>

            <div class="col-12 mt-1 mb-5">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn"
                    style="--bs-btn-padding-y: 0.5rem; --bs-btn-padding-x: 2.5rem; --bs-btn-font-size: 1rem;
                    background-color: rgba(232, 123, 47, 1); border-radius: 8px; color: white;
                    margin-top: 10px">Lanjutkan Pembayaran</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</x-layout>

<script src="{{ asset('script/donasi-page.js') }}"></script>
