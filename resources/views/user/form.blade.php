<link rel="stylesheet" href="{{ asset('style/store.css') }}">
<link rel="stylesheet" href="{{ asset('style/user.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<x-layout :auth="$auth">
    <div class="pembatas"></div>
    <div class="pembatas"></div>
    <div class="container card">
        <form class="row g-3 needs-validation pe-4" method="POST" action="/form-pengajuan-hukum"
            enctype="multipart/form-data" style="width: 100%" novalidate>
            @csrf
            @method('POST')
            <div class="pembatas"></div>
            <h1 style="text-align: center;">Formulir Permohonan Pengajuan Hukum</h1>

            <div class="row m-4">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Pemohon</label>
                        <input type="text" class="form-control" name="nomor_pemohon" placeholder="Nomor Pemohon"
                            value="{{ $noPemohon }}" readonly>
                    </div>
                </div>
            </div>


            <div class="row me-4 ms-4">
                <h2>Data Pribadi</h2>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Panggilan</label>
                        <input type="text" class="form-control" name="nama_panggilan" placeholder="Nama Panggilan"
                            required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir"
                            required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                            value="laki-laki" required>
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                            value="perempuan" required>
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Agama</label>
                <div class="col-5">
                    <select class="form-select" name="agama" required aria-label="Default select example">
                        <option value="" disabled selected>-- Pilih Agama --</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="buddha">Buddha</option>
                        <option value="hindu">Hindu</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Status Perkawinan</label>
                <div class="col-5">
                    <select class="form-select" name="status_perkawinan" aria-label="Default select example" required>
                        <option value="" disabled selected>-- Pilih Status Perkawinan --</option>
                        <option value="sudah">Sudah</option>
                        <option value="belum">Belum</option>
                        <option value="duda">Duda</option>
                        <option value="janda">Janda</option>
                        <option value="cerai">Cerai</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <label for="jumlahAnak">Jumlah Anak</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="jumlahAnak" name="jumlah_anak"
                            min="0" required>
                        <div class="input-group-append">
                            <span class="input-group-text">orang</span>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <label for="jumlahAnak">Jumlah Anak dalam Tanggungan</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="jumlahAnak" name="jumlah_anak_tanggungan"
                            min="0" required>
                        <div class="input-group-append">
                            <span class="input-group-text">orang</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="my-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat_lengkap" rows="3" required></textarea>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">RT/RW</label>
                        <input type="text" class="form-control" name="RT_RW" placeholder="RT/RW" required>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Desa/Kelurahan</label>
                        <input type="text" class="form-control" name="Desa_Kelurahan"
                            placeholder="Desa/Kelurahan" required>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan"
                            required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kabupaten/Kota</label>
                        <input type="text" class="form-control" name="Kabupaten_Kota"
                            placeholder="Kabupaten/Kota" required>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="h2">Data Tambahan</div>
                <label for="exampleFormControlInput1" class="form-label">Identitas Diri</label>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example" name="identitas_diri" required>
                        <option value="" disabled selected>-- Pilih Identitas Diri --</option>
                        <option value="ktp">KTP</option>
                        <option value="sim">SIM</option>
                        <option value="domisili">Domisili</option>
                        <option value="tidak_ada">Tidak Ada</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Identitas</label>
                        <input type="text" class="form-control" name="nomor_identitas"
                            placeholder="Nomor Identitas" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Keterangan Tidak Mampu</label>
                <div class="col-5">
                    <select class="form-select" name="keterangan_tidak_mampu" aria-label="Default select example"
                        required>
                        <option value="" disabled selected>-- Pilih Keterangan Tidak Mampu --</option>
                        <option value="1">SKTM</option>
                        <option value="2">Gakin</option>
                        <option value="3">Jamskesmas</option>
                        <option value="4">Terlampir</option>
                        <option value="5">Tidak Ada</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Keterangan Tidak Mampu</label>
                        <input type="text" class="form-control" name="nomor_keterangan_tidak_mampu"
                            placeholder="Nomor Keterangan Tidak Mampu" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                <div class="col-5">
                    <select class="form-select" name="pekerjaan" aria-label="Default select example" required>
                        <option value="" disabled selected>-- Pilih Pekerjaan --</option>
                        <option value="pekerja_tetap">Pekerja Tetap</option>
                        <option value="pekerja_tidak_tetap">Pekerja Tidak Tetap</option>
                        <option value="pekerja_lepas">Pekerja Lepas</option>
                        <option value="pns">PNS</option>
                        <option value="pensiunan">Pensiunan</option>
                        <option value="purnawirawan">Purnawirawan</option>
                        <option value="tidak_bekerja">Tidak Bekerja</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="jumlahAnak">Jumlah Tanggungan</label> <span style="font-size: 10px; opacity: 0.4;">*tidak
                    termasuk
                    anak atau kosongi jika tidak memiliki tanggungan</span>
                <div class="col-4">
                    <div class="input-group">
                        <input type="number" class="form-control" id="jumlahAnak" name="jumlah_tanggungan"
                            min="0" required>
                        <div class="input-group-append">
                            <span class="input-group-text">orang</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir</label>
                <div class="col-5">
                    <select class="form-select" name="pendidikan_terakhir" aria-label="Default select example"
                        required>
                        <option value="" disabled selected>-- Pilih Pendidikan Terakhir --</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA</option>
                        <option value="akademi">Akademi</option>
                        <option value="perguruan_tinggi">Perguruan Tinggi</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <label for="exampleFormControlInput1" class="form-label">Telpon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Telpon">
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <label for="exampleFormControlInput1" class="form-label">HP</label>
                    <input type="text" class="form-control" name="HP" placeholder="HP">
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Uraian Singkat Pokok
                            Persoalan</b></label>
                    <textarea class="form-control" name="uraian" rows="5" required></textarea>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <p>Demikian permohonan ini saya buat dengan sesungguhnya untuk keperluan mendapatkan bantuan hukum.</p>
                <label for="exampleFormControlInput1" class="form-label">Dibuat di:</label>
                <div class="col-5">
                    <input type="text" class="form-control" name="lokasi_pembuatan_form" placeholder="Kota"
                        required>
                </div>
                <div class="col-2">
                    <span><b>31 May 2024</b></span>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="row">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bi bi-image" id="placeholder-icon" style="font-size: 2rem;"></i>
                                    <i class="bi bi-plus-circle" id="placeholder-icon-plus"
                                        style="font-size: 1.5rem; margin-left: 0.5rem;"></i>
                                    <img id="output" class="img-fluid" />
                                </div>
                            </div>
                        </label>
                        <input class="form-control" type="file" id="formFile" accept="image/*" name="image_url"
                            onchange="previewImage(event)" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <p>Nama Terang Pemohon</p>
                    </div>
                    <div class="col-3"></div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <button style="background-color: rgba(232, 123, 47, 1); color: white" type="button"
                            class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Submit
                        </button>
                    </div>
                </div>
            </div>

            {{-- Modal --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Formulir</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin akan mengirimkan formulir ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Kirimkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script>
            function previewImage(event) {
                var output = document.getElementById('output');
                var placeholderIcon = document.getElementById('placeholder-icon');
                var placeholderIconPlus = document.getElementById('placeholder-icon-plus');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src); // Free memory
                }
                output.style.display = 'block';
                placeholderIcon.style.display = 'none';
                placeholderIconPlus.style.display = 'none';
            }

            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
        </script>
    </div>
    <div class="pembatas"></div>
</x-layout>
