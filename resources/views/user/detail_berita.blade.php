<link rel="stylesheet" href="{{ asset('style/styles.css') }}">

<x-layout :auth="$auth">
    <div class="container py-4">
        <div class="pembatas"></div>
        <div class="row m-4">

            <div class="row">
                <div class="col-11">
                    <h1 style="text-align: justify;">{{ $kasusHukum->title }}</h1>
                </div>
                <div class="col-1">
                    <button type="button" class="btn" id="shareButton" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Link" style="background-color: rgba(232, 123, 47, 1); color:white">
                        Share
                    </button>
                </div>
            </div>

            <div class="d-flex">
                <p style="color: orange;">{{ $kasusHukum->nama_lbh }}</p>
                &nbsp;
                &nbsp;
                <i style="color: rgba(232, 123, 47, 1); font-size: 60px; padding-top: 10px; padding-bottom: 10px;"
                    class="bi bi-circle-fill"></i>
                &nbsp;
                &nbsp;
                <p>{{ $kasusHukum->tanggal }}</p>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <div style="border-radius: 20px; width: 80%; height: 90%; padding-bottom: 50%; background-size: cover; background-image: url(https://media.istockphoto.com/id/1449333398/id/foto/pengusaha-berjabat-tangan-pengacara-mitra-atau-pengacara-mendiskusikan-perjanjian-kontrak.jpg?s=1024x1024&w=is&k=20&c=64UHwZ1G3XqegEU-SbdeELLEXKQNYbivpkvHrKJQLcQ=);"
                    class="img">
                </div>
            </div>

            <div class="row mt-3">
                <p style="text-align: justify;">{{ $kasusHukum->description }}</p>
            </div>

            <div class="row m-3">
                <div class="col-6">
                    <h3>Status Hukum</h3>
                    <ul class="progress-tracker progress-tracker--vertical">
                        @foreach ($progress as $prog)
                            <li class="progress-step is-complete">
                                <div class="progress-marker"></div>
                                <div class="progress-text">
                                    <h4 class="progress-title">{{ $prog->topik_progress }}</h4>
                                    {{ $prog->detail }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-6">
                    <h3>Partisipasi Hukum</h3>
                    <div class="container bg-light my-3 py-3 px-3 rounded-4">
                        <p>Terkumpul: {{ $total / $kasusHukum->target_donasi * 100 }}%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                style="width: {{ $total / $kasusHukum->target_donasi * 100 }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Rp. {{ number_format($total, 2, ",", ".") }}</p>
                            <p>Rp. {{ number_format($kasusHukum->target_donasi, 2, ",", ".") }}</p>
                        </div>
                    </div>
                    <a class="btn btn" id="buttonDonasi" style="color: white; width: 100%;" href="/berita/donasi/{{ $kasusHukum->id_kasus }}" role="button">Donasi
                        Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('shareButton').addEventListener('click', function() {
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(function() {
                alert('Link telah disalin ke clipboard!');
            }, function(err) {
                console.error('Gagal menyalin teks: ', err);
            });
        });
    </script>
</x-layout>
