<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- external css -->
<link rel="stylesheet" href="{{ asset('style/pengajuan_bantuan.css') }}">
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid py-5">
      <div class="row">
        <div class="col-6">
          
        </div>
        <div class="col-6 d-flex justify-content-center">
          <img src="../assets/images/Logo CariAdil.png" class="logo" alt="Logo CariAdil">

        </div>
      </div>
        {{-- <div>
            <img src="../assets/images/Logo CariAdil.png" class="logo" alt="Logo CariAdil">
        </div>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Pengajuan</a>
          <a class="nav-link" href="#">Berlangsung</a>
        </div>
      </div> --}}
    </div>
  </nav>
{{-- <nav class="topnav">
    <div>
        <img src="assets/images/Logo CariAdil.png" class="logo" alt="Logo CariAdil">
    </div>
    <ul>
        <li><a href="#">Pengajuan</a></li>
        <li><a href="#">Berlangsung</a></li>
    </ul>
    <div class="box-profile">
        <i class="bi bi-person"></i>
        <p>LBH Ojanlomba</p>
    </div>
</nav> --}}
<!-- End Navigation Bar -->

<!-- Container -->
<div class="container py-5">
    <div class="row">
        <div class="col-2 d-flex justify-content-center">
            <button type="button" id = "buttonback"class="btn btn-warning"> < Back </button>
        </div>
    </div>
    <h1>Pengajuan Perkara</h1>

    <div class="row d-flex justify-content-center py-5">
        <div class="col-5 d-flex justify-content-center">
          <p class="d-inline-flex gap-3 py-3">
            <button type="button" class="btn" id="button1" data-bs-toggle="button">Toggle button</button>
            <button type="button" class="btn active" id = "button2" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
        </p>
        </div>
        <div class="col-1"></div>
        <div class="col-5">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search">
                <button class="btn" id="buttonsearch" type="submit">Search</button>
            </form>
        </div>
      </div>
    

    <div class="row row-cols-1 row-cols-md-2 g-4 py-4">
        <div class="col d-flex justify-content-center">
          <div class="card border border-light-subtle">
            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 1</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card border border-light-subtle"">
            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 2</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card border border-light-subtle"">
            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 3</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card border border-light-subtle"">
            <img src="../assets/images/kasus1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title 4</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
</div>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
