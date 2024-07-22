<link rel="stylesheet" href="{{ asset('style/styles.css') }}">
<x-layout :auth="$auth">
    {{-- @foreach ($data as $dt) --}}
    {{-- {{ dd($data) }} --}}
        <div class="container">
            <div class="row d-flex justify-content-evenly">
                <div class="pembatas"></div>
                <div class="pembatas"></div>
                <div class="shadow-sm col-4 card py-4 px-4">
                    <div class="row">
                        {{-- <div class="col-3 d-flex align-items-center">
                            <div style="width: 60px; height: 60px; background-color: gray; border-radius: 100px;" class="imagePlace "></div>
                        </div> --}}
                        <div class="col-9">
                            <h3>Sumber</h3>
                            <h6>{{ $data['nama'] }}</h6>
                            {{-- <h6>Bank BCA</h6> --}}
                            {{-- <h6>5500436133</h6> --}}
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-between">
                    <svg style="width: 100%; height: 44px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
                      </svg>
                </div>
                <div class="shadow-sm col-4 card py-4 px-4">
                    <div class="row">
                        {{-- <div class="col-3 d-flex align-items-center">
                            <div style="width: 60px; height: 60px; background-color: gray; border-radius: 100px;" class="imagePlace "></div>
                        </div> --}}
                        @foreach ($bank as $bk)
                        <div class="col-9">
                            <h3>Tujuan</h3>
                            <h6>Cari Adil Corp</h6>
                            <h6>{{ $bk->nama }}</h6>
                            <h6>{{ $bk->no_rekening }}</h6>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="shadow-sm card py-4 px-4 my-4">
                    <h3>Detail Pembayaran</h3>
                    <div class="row d-flex justify-content-between">
                        <div class="col-4">
                            <h6>Donasi</h6>
                            <h6>Unique Code</h6>
                        </div>
                        <div style="text-align: end;" class="col-4">
                            <h6>Rp. {{ number_format($data['nominal'], 2, ',', '.') }}</h6>
                            <h6>{{ $count }}</h6>
                        </div>
                    </div>
                </div>
                <hr class="hr" />
                <div class="row d-flex justify-content-between">
                    <div  class="col-4">
                        <h3>Total Pembayaran</h3>
                    </div>
                    <div style="text-align: end;" class="col-4"><h3>@php
                        $total = $data['nominal'] + $count
                    @endphp
                    Rp. {{ number_format($total, 2, ',', '.') }}</h3></div>
                </div>
            </div>

            <div class="accordion accordion-flush my-3" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><h4>Ringkasan</h4></button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="item-container">
                    <div class="row m-3 d-flex justify-content-between">
                        <div class="col-4">
                        <p>Nama Donatur</p>
                        <p>Email</p>
                        <p>Nomor Telepon</p>
                        </div>
                        <div class="col-8">
                        <p>: {{ $data['nama'] }}</p>
                        <p>: {{ $data['email'] }}</p>
                        <p>: {{ $data['nomor_telepon'] }}</p>
                        </div>
                    </div>
                    <hr class="hr mx-4" />
                    <div class="row m-3">
                        <div class="col-12">
                            <p>Dukungan atau Doamu :</p>
                            <p>{{ $data['dukungan'] }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- @endforeach --}}
    {{-- <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-warning my-2">Konfirmasi Pembayaran</button>
    </div> --}}
    {{-- {{  dd($data) }} --}}
    <a class="btn btn" id="buttonDonasi" style="color: white; width: 100%;" href="/berita/kasus-hukum/{{ $data['id_kasus_hukum'] }}" role="button">Kembali</i></a>

        </div>
</x-layout>
