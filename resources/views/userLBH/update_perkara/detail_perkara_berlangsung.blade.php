<x-layout :auth="$auth">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center">
      <div class="col-10 text-center h1 mt-5">
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
        <div class="d-flex mt-5 justify-content-center h3" >
            Terima perkara ini?
        </div>
        <div class="d-flex justify-content-center mt-3 gap-4 mb-5" style="color:rgba(232, 123, 47, 1)">
            <i class="fa-solid fa-circle-check fa-4x"></i>
            <i class="fa-solid fa-circle-xmark fa-4x"></i>
        </div>

        <div class="d-flex justify-content-center h4">
            Rincian Pengajuan
        </div>

        <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Data Pribadi
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Data Tambahan
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Pokok Persoalan
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-2">

        </div>
    </div>
</div>
</x-layout>