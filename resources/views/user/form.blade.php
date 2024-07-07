<link rel="stylesheet" href="{{ asset('style/store.css') }}">
<link rel="stylesheet" href="{{ asset('style/user.css') }}">

<x-layout :auth="$auth">
    <div class="pembatas"></div>
    <div class="pembatas"></div>
    <div class="container card">
        <form class="row g-3 needs-validation pe-4" method="POST" style="width: 100%" novalidate>
            @method('POST')
            <div class="pembatas"></div>
            <h1 style="text-align: center;">Formulir Permohonan Pengajuan Hukum</h1>

            <div class="row m-4">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Pemohon</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Pemohon" required>
                    </div>
                </div>
            </div>

            
            <div class="row me-4 ms-4">
                <h2>Data Pribadi</h2>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Panggilan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Panggilan" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Lahir" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1" required>
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2" required>
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Agama</label>
                <div class="col-5">
                    <select class="form-select" required aria-label="Default select example">
                        <option value="">Agama</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Katolik</option>
                        <option value="4">Buddha</option>
                        <option value="5">Hindu</option>
                        <option value="6">Konghucu</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Status Perkawinan</label>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="">Status Perkawinan</option>
                        <option value="1">Sudah</option>
                        <option value="2">Belum</option>
                        <option value="3">Duda</option>
                        <option value="4">Janda</option>
                        <option value="5">Cerai</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <label for="jumlahAnak">Jumlah Anak</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="jumlahAnak" name="jumlahAnak" min="0" required>
                        <div class="input-group-append">
                            <span class="input-group-text">orang</span>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <label for="jumlahAnak">Jumlah Anak dalam Tanggungan</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="jumlahAnak" name="jumlahAnak" min="0" required>
                        <div class="input-group-append">
                            <span class="input-group-text">orang</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="my-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
            </div>
            <div class="row me-4 ms-4 mt-3">
                <div class="my-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">RT/RW</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="RT/RW" required>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kode Pos" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Desa/Kelurahan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Desa/Kelurahan" required>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kecamatan" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kabupaten/Kota</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kabupaten/Kota" required>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Provinsi" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="h2">Data Tambahan</div>
                <label for="exampleFormControlInput1" class="form-label">Identitas Diri</label>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="">Identitas Diri</option>
                        <option value="1">KTP</option>
                        <option value="2">SIM</option>
                        <option value="3">Domisili</option>
                        <option value="4">Tidak Ada</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="h2">Data Tambahan</div>
                <label for="exampleFormControlInput1" class="form-label">Identitas Diri</label>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="">Identitas Diri</option>
                        <option value="1">KTP</option>
                        <option value="2">SIM</option>
                        <option value="3">Domisili</option>
                        <option value="4">Tidak Ada</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Identitas</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nomor Identitas" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Keterangan Tidak Mampu</label>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="">Keterangan Tidak Mampu</option>
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
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nomor Keterangan Tidak Mampu" required>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="">Pekerjaan</option>
                        <option value="1">Pekerja Tetap</option>
                        <option value="2">Pekerja Tidak Tetap</option>
                        <option value="3">Pekerja Lepas</option>
                        <option value="4">PNS</option>
                        <option value="5">Pensiunan</option>
                        <option value="5">Purnawirawan</option>
                        <option value="5">Tidak Bekerja</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                    <label for="jumlahAnak">Jumlah Tanggungan</label> <span style="font-size: 10px; opacity: 0.4;">*tidak termasuk
                        anak atau kosongi jika tidak memiliki tanggungan</span>
                <div class="col-4">
                    <div class="input-group">
                        <input type="number" class="form-control" id="jumlahAnak" name="jumlahAnak" min="0" required>
                        <div class="input-group-append">
                            <span class="input-group-text">orang</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir</label>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="">Pendidikan Terakhir</option>
                        <option value="1">SD</option>
                        <option value="2">SMP</option>
                        <option value="3">SMA</option>
                        <option value="4">Akademi</option>
                        <option value="5">Perguruan Tinggi</option>
                    </select>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <label for="exampleFormControlInput1" class="form-label">Telpon</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telpon">
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-5">
                    <label for="exampleFormControlInput1" class="form-label">HP</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="HP">   
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Uraian Singkat Pokok Persoalan</b></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
                </div>
            </div>

            <div class="row me-4 ms-4 mt-3">
                <p>Demikian permohonan ini saya buat dengan sesungguhnya untuk keperluan mendapatkan bantuan hukum.</p>
                <label for="exampleFormControlInput1" class="form-label">Dibuat di:</label>
                <div class="col-5">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kota" required>
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
                            <input class="form-control" type="file" id="formFile" style="display: none;" accept="image/*"
                                onchange="previewImage(event)">
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
                        <button style="background-color: rgba(232, 123, 47, 1); color: white" type="submit" class="btn btn-warning" >
                            Submit
                        </button>
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
                output.onload = function () {
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