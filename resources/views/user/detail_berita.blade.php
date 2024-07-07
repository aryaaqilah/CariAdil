<link rel="stylesheet" href="{{ asset('style/styles.css') }}">

<x-layout :auth="$auth">
    <div class="container py-4">
        <div class="pembatas"></div>
        <div class="row m-4">

            <div class="row">
                <div class="col-11">
                    {{-- <h1 style="text-align: justify;">{{ $kasusHukum->title }}</h1> --}}
                    <h1 style="text-align: justify;">hehe judul</h1>
                </div>
                <div class="col-1">
                    <a class="btn btn" id="buttonDonasi" style="color: white; width: 100%;" href="#" role="button">Share</i></a>
                </div>
            </div>
            
            <div class="d-flex">
                {{-- <p style="color: orange;">{{ $kasusHukum->nama_lbh }}</p> --}}
                <p style="color: rgba(232, 123, 47, 1); font-weight: bold">hehe lbh</p>
                &nbsp;
                &nbsp;
                <i style="color: rgba(232, 123, 47, 1);  font-size: 60px; padding-top: 10px; padding-bottom: 10px;"
                    class="bi bi-circle-fill"></i>
                &nbsp;
                &nbsp;
                {{-- <p>{{ $kasusHukum->tanggal }}</p> --}}
                <p>hehe</p>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <div style="border-radius: 20px; width: 80%; height: 90%; padding-bottom: 50%; background-size: cover; background-image: url(https://media.istockphoto.com/id/1449333398/id/foto/pengusaha-berjabat-tangan-pengacara-mitra-atau-pengacara-mendiskusikan-perjanjian-kontrak.jpg?s=1024x1024&w=is&k=20&c=64UHwZ1G3XqegEU-SbdeELLEXKQNYbivpkvHrKJQLcQ=);"
                    class="img">
                </div>
            </div>

            <div class="row mt-3">
                {{-- <p style="text-align: justify;"> {{ $kasusHukum->description }}</p> --}}
                <p style="text-align: justify;"> hehe</p>
            </div>

            <div class="row m-3">
                <div class="col-6">
                    <h3 style="">Status Hukum</h3>
                    <ul class="progress-tracker progress-tracker--vertical">
                        <li class="progress-step is-complete">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                                <h4 class="progress-title">Step 1</h4>
                                Summary text explaining this step to the user
                            </div>
                        </li>
                        <li class="progress-step is-complete">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                                <h4 class="progress-title">Step 2</h4>
                                Summary text explaining this step to the user
                            </div>
                        </li>
        
                        <li class="progress-step is-active" aria-current="step">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                                <h4 class="progress-title">Step 3</h4>
                                Summary text explaining this step to the user
                            </div>
                        </li>
        
                        <li class="progress-step">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                                <h4 class="progress-title">Step 4</h4>
                                Summary text explaining this step to the user
                            </div>
                        </li>
        
                        <li class="progress-step">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                                <h4 class="progress-title">Step 5</h4>
                                Summary text explaining this step to the user
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-6">
                    <h3>Partisipasi Hukum</h3> 
                    <div class="container bg-light my-3 py-3 px-3 rounded-4">
                        <p>Terkumpul 00.00 %</p>
                        <!-- Previous markup -->
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
        
                        <div class="d-flex justify-content-between">
                            <p>Rp. 6.300.000</p>
                            <p>Rp. 10.000.000</p>
                        </div>
                    </div>
        
                    <a class="btn btn" id="buttonDonasi" style="color: white; width: 100%;" href="#" role="button">Donasi
                        Sekarang</i></a>
                </div>
            </div>
        </div>
    </div>   
</x-layout>

