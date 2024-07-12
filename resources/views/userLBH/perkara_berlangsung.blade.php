<!-- external css -->
<link rel="stylesheet" href="{{ asset('style/perkara_berlangsung.css') }}">

<x-layout :auth="$auth">
    <div class="container py-5">

        <div class = "judul">
            <h1>Perkara Berlangsung</h1>
        </div>

        <div class="row d-flex justify-content-center py-4">
            <div class="col-1"></div>
            <div class="col-5">
                <p class="d-flex gap-4">
                    <button type="button" class="btn" id="button1" data-bs-toggle="button">Pidana</button>
                    <button type="button" class="btn active" id = "button2" data-bs-toggle="button"
                        aria-pressed="true">Perdata</button>
                </p>
            </div>
            <div class="col-5">
                <form class="d-flex py-3" role="search">
                    <input class="form-control search-input me-2" id = "search_here" type="search"
                        placeholder="Search Here" aria-label="Search">
                    <button class="btn" id="buttonsearch" type="submit">Search</button>
                </form>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-3">
                <h3>Pidana (4)</h3>
            </div>
            <div class="col-8"></div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4 py-4">
            @foreach ($perkaraBerlangsung as $pb)
            <a href="{{route('detail_perkara', $pb->id_kasus)}}" class="card-link">
                <div class="col d-flex justify-content-center">
                    <div class="card border border-light-subtle" id="card">
                        <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$pb->title}}</h5>
                            <p class="card-text">{{$pb->description}}</p>   
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    {{-- End Container  --}}
</x-layout>
