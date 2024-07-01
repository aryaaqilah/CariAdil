<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('style/styles.css') }}">

<div class="container my-5">
    <div class="d-flex justify-content-between">
        <a class="btn btn-outline-warning" href="/" role="button"><i class="bi bi-chevron-left"></i>Back</a>
        <a class="btn btn-warning" style="color: white;" href="#" role="button">Share</i></a>
    </div>

    <h1 style="text-align: justify;">{{ $kasusHukum->title }}</h1>

    <div class="d-flex">
        <p style="color: orange;">{{ $kasusHukum->nama_lbh }}</p>
        &nbsp;
        &nbsp;
        <i style="color: orange;  font-size: 6px; padding-top: 10px; padding-bottom: 10px;"
            class="bi bi-circle-fill"></i>
        &nbsp;
        &nbsp;
        <p>{{ $kasusHukum->tanggal }}</p>
    </div>

    <div style="border-radius: 20px; width: 100%; padding-bottom: 50%; background-size: cover; background-image: url(https://media.istockphoto.com/id/1449333398/id/foto/pengusaha-berjabat-tangan-pengacara-mitra-atau-pengacara-mendiskusikan-perjanjian-kontrak.jpg?s=1024x1024&w=is&k=20&c=64UHwZ1G3XqegEU-SbdeELLEXKQNYbivpkvHrKJQLcQ=);"
        class="img-fluid">
    </div>

    <p style="text-align: justify;"> {{ $kasusHukum->description }}</p>

    <div class="row">
        <div class="col">
            <h1 style="">Status Hukum</h1>
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
        <div class="col">
            <h1>Partisipasi Hukum</h1>
            <div class="container bg-light my-3 py-3 px-3 rounded-4">
                <p>Terkumpul 00.00 %</p>
                <!-- Previous markup -->
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-label="Basic example"
                        style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="d-flex justify-content-between">
                    <p>Rp. 6.300.000</p>
                    <p>Rp. 10.000.000</p>
                </div>
            </div>

            <a class="btn btn-warning" style="color: white; width: 100%;" href="#" role="button">Donasi
                Sekarang</i></a>
        </div>
    </div>

</div>
