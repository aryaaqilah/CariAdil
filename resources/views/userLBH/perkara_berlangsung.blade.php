<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- external css -->
<link rel="stylesheet" href="{{ asset('style/perkara_berlangsung.css') }}">

<x-layout>
  <div class="container py-5">

    <div class = "judul"><h1>Pengajuan Perkara</h1></div>

    <div class="row d-flex justify-content-center py-4">
        <div class="col-1"></div>
        <div class="col-5">
          <p class="d-flex gap-4">
            <button type="button" class="btn" id="button1" data-bs-toggle="button">Pidana</button>
            <button type="button" class="btn active" id = "button2" data-bs-toggle="button" aria-pressed="true">Perdata</button>
          </p>
        </div>
        <div class="col-5">
            <form class="d-flex py-3" role="search">
                <input class="form-control search-input me-2" id = "search_here" type="search" placeholder="Search Here" aria-label="Search" >
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
        <div class="col d-flex justify-content-center">
          <div class="card border border-light-subtle" id="card">
            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 1</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>

        <div class="col d-flex justify-content-center">
          <div class="card border border-light-subtle" id="card">
            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 2</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card border border-light-subtle" id="card">
            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 3</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card border border-light-subtle" id="card">
            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 4</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
</div>
{{-- End Container  --}}
</x-layout>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
