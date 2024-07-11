<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('style/styles.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-between mx-1 my-4">
            <div class="col-4 card py-4 px-4">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <div style="width: 60px; height: 60px; background-color: gray; border-radius: 100px;" class="imagePlace "></div>
                    </div>
                    <div class="col-9">
                        <h3>Sumber</h3>
                        <h6>Andreas Liujaya Wiranata</h6>
                        <h6>Bank BCA</h6>
                        <h6>5500436133</h6>
                    </div>
                </div>
            </div>
            <div class="col-4 card py-4 px-4">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <div style="width: 60px; height: 60px; background-color: gray; border-radius: 100px;" class="imagePlace "></div>
                    </div>
                    <div class="col-9">
                        <h3>Tujuan</h3>
                        <h6>Cari Adil Corp</h6>
                        <h6>Bank BCA</h6>
                        <h6>5500436133</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="card py-4 px-4">
            <div class="row d-flex justify-content-between">
                <div class="col-4">
                    <h3>Detail Pembayaran</h3>
                    <h6>Donasi</h6>
                    <h6>Unique Code</h6>
                </div>
                <div style="text-align: end;" class="col-4">
                    <h6>Rp 100.000</h6>
                    <h6>69</h6>
                </div>
            </div>
            <hr class="hr" />
            <div class="row d-flex justify-content-between">
                <div  class="col-4">
                    <h3>Total Pembayaran</h3>
                </div>
                <div style="text-align: end;" class="col-4"><h3>Rp 100.069</h3></div>
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
                      <p>: Andreas Liujaya</p>
                      <p>: Eas@gmail.com</p>
                      <p>: 081212345678</p>
                    </div>
                  </div>
                  <hr class="hr mx-4" />
                  <div class="row m-3">
                      <div class="col-12">
                          <p>Dukungan atau Doamu :</p>
                          <p>Semoga Yang mendapatkan ini bisa terbantu. AMINNNNN</p>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-warning my-2">Konfirmasi Pembayaran</button>
    </div>

        </div>
    </body>
</html>