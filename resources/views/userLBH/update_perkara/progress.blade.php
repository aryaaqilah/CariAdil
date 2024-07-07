<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkara Berlangsung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/perkara-berlangsung-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 offset-1">
                <i class="fa-solid fa-chevron-left"></i>
                back
            </div>
            <div class="col-8">
                <div class="d-flex">
                    <div class="col-3 fs-6">
                        Perkara Berlangsung
                    </div>
                    <!-- <div class="col-9"></div> -->
                </div>
                <div class="d-flex justify-content-center my-3">
                    <div class="col-10 text-center h1">
                        <strong>Panah Asmara</strong>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-3 my-3">
                    <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1)">Pidana</span>
                    <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1)">Perebutan Hak Asuh Anak</span>
                    <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1)">Penggugat</span>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="h6 fst-italic">
                        29 January 2019
                    </p>
                </div>
                <div class="d-flex justify-content-center my-3">
                    <img src="..\public\assets\images\kasus1.png" alt="">
                </div>
                <div class="d-flex align-items-center justify-content-center" style="width: 100%;">
                    <div class="col-12">
                        <hr class="mt-2 mb-2 position-relative" style="height: 1vh;"/>
                        <!-- test -->
                    </div>
                    <div class="col-2 d-flex position-absolute gap-5 my-3">
                        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1)">Informasi</span>
                        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1)">Progres</span>
                        <span class="badge rounded-pill text-dark" style="background-color:rgba(225, 223, 209, 1)">Detail</span>
                    </div>
                </div>

                <div class="d-flex h5">
                    Progress Perkara
                </div>

                <div class="d-flex justify-content-center">
                    <div class="col-5">
                        <div class="position-relative m-4 mt-5">
                            <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px; ">
                              <div class="progress-bar" style="width: 100%; "></div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 translate-middle gap-2 bg-transparent" style="width: 10rem;">
                                <button type="button" class=" btn btn-sm btn-primary rounded-pill progress-btn" style="width: 2rem; height:2rem; background-color:rgba(232, 123, 47, 1)">1</button>
                                <!-- <p class="text-center">Pengajuan Perkara ke Pengadilan</p> -->
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-50 translate-middle gap-2 bg-transparent" style="width: 10rem">
                                <button type="button" class=" btn btn-sm btn-primary rounded-pill progress-btn" style="width: 2rem; height:2rem; background-color:rgba(232, 123, 47, 1)">2</button>
                                <!-- <p class="text-center">Persidangan Pertama</p> -->
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-100 translate-middle gap-2 bg-transparent" style="width: 10rem; ">
                                <button type="button" class=" btn btn-sm btn-primary rounded-pill progress-btn" style="width: 2rem; height:2rem;; background-color:rgba(232, 123, 47, 1);">3</button>
                                <!-- <p class="text-center">Persidangan Kedua</p> -->
                            </div>
                          </div>
                          <div class="position-relative m-4 mt-5 ">
                            <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 translate-middle gap-2 bg-transparent h6" style="width: 10rem">
                                <p class="text-center h6">Pengajuan Perkara ke Pengadilan</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-50 translate-middle gap-2 bg-transparent h6" style="width: 10rem">
                                <p class="text-center h6">Persidangan Pertama</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-100 translate-middle gap-2 bg-transparent h6" style="width: 10rem">
                                <p class="text-center h6">Persidangan Kedua</p>
                            </div>
                          </div>
                    </div>
                    <div class="d-flex align-items-center m-3">
                        <i class="fa-solid fa-chevron-right", style="color:rgba(232, 123, 47, 1)"></i>
                    </div>
                </div>

                <div class="d-flex mt-5 h5" >
                    Update Perkara
                </div>

                <div>
                    <form class="d-flex justify-content-center">
                        <div class="col-10">
                            <div class="col-12 mt-3">
                                <label for="inputAddress" class="form-label">Tanggal</label>
                                <input type="date" class="form-control">
                              </div>
                              <div class="col-12 d-flex justify-content-between gap-4 mt-3">
                                <div class="col-md-5">
                                    <label class="form-label">Jenis Kegiatan</label>
                                    <input type="text" class="form-control">
                                  </div>
                                  <div class="col-md-6">
                                    <label class="form-label">Agenda Kegiatan</label>
                                    <input class="form-control">
                                  </div>
                              </div>

                              <div class="col-12">
                                <label class="form-label">Catatan</label>
                                <input type="text" class="form-control" align="left" style="line-height: 5em; resize:none;">
                              </div>
                            </form>
                      </div>
                        </div>
                        <div class="d-flex mt-5 justify-content-center" >
                            Perkara sudah selesai?
                        </div>
                        <div class="d-flex justify-content-center mt-2 gap-4 mb-5" style="color:rgba(232, 123, 47, 1)">
                            <i class="fa-solid fa-circle-check fa-4x"></i>
                            <i class="fa-solid fa-circle-xmark fa-4x"></i>
                        </div>
                        </div>

                </div>

            <div class="col-2">

            </div>
        </div>
    </div>
</body>
</html>