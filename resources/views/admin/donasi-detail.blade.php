@extends('components/admin-layout')

@section('title', 'Create Donasi')

@section('content')
    <div class="donation-area">
        <h6 style="font-weight: bold">Donasi</h6>
        <p style="font-size: 0.75rem">Donasi terkumpul hingga sekarang</p>
        <div class="donation-stat d-flex flex-column">
            <p style="font-weight: bold; margin:0">Andreas Liujaya</p>
            <p class="flex-column" style="font-size:0.8rem; margin:0">ID Kasus: P00030</p>
            <p class="flex-column" style="font-size:0.8rem; margin:0">LBH Mawar Saron</p>
            <br>
            <div class="progress-area" style="width : 30rem; height: 2rem">
                <div class="progress" style="width:100%">
                    <div class="progress-bar" role="progressbar"
                        aria-label="Basic example"
                        style="width: 73%; height:2rem; color:orange"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row db">
        <div class="col-5 big-stat">
            <h6 style="font-weight: bold">Riwayat Penarikan</h6>
            <p style="font-size: 0.75rem">Catatan penarikan donasi</p>
            <table class="table logaktivitas">
                <thead>
                    <tr>
                        <th scope="col" width="130rem">Nominal</th>
                        <th scope="col" width="130rem">Tanggal</th>
                        <th scope="col" width="130rem">Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>70.000</td>
                        <td>30 Juni 2024</td>
                        <td>uyo.png</td>
                    </tr>
                    <tr>
                        <td>70.000</td>
                        <td>30 Juni 2024</td>
                        <td>uyo.png</td>
                    </tr>
                    <tr>
                        <td>70.000</td>
                        <td>30 Juni 2024</td>
                        <td>uyo.png</td>
                    </tr>
                    <tr>
                        <td>70.000</td>
                        <td>30 Juni 2024</td>
                        <td>uyo.png</td>
                    </tr>
                    <tr>
                        <td>70.000</td>
                        <td>30 Juni 2024</td>
                        <td>uyo.png</td>
                    </tr>
                    <tr>
                        <td>70.000</td>
                        <td>30 Juni 2024</td>
                        <td>uyo.png</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-5 big-stat">
            <h6 style="font-weight: bold">Tarik Uang Donasi</h6>
            <p style="font-size: 0.75rem">Ambil uang donasi untuk pemohon</p>
            <div class="mb-3">
                <label for="tanggalDonasi" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggalDonasi">
            </div>
            <div class="mb-3">
                <label for="nominalDonasi" class="form-label">Nominal</label>
                <input type="text" class="form-control" id="nominalDonasi">
            </div>
            <div class="mb-3">
                <label for="fileDonasi" class="form-label">Bukti</label>
                <input type="file" class="form-control" id="fileDonasi">
            </div>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
    </div>

    <div class="form-area">
        <h6 style="font-weight: bold">Riwayat Donasi</h6>
        <p style="font-size: 0.75rem">Catatan penarikan donasi</p>

        <table class="table logaktivitas">
            <thead>
                <tr>
                    <th scope="col" width="130rem">Nama</th>
                    <th scope="col" width="50rem">Bank</th>
                    <th scope="col" width="110rem">Jumlah Donasi</th>
                    <th scope="col" width="160rem">Email</th>
                    <th scope="col" width="110rem">Nomor Telepon</th>
                    <th scope="col">Dukungan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Evotiana</td>
                    <td>BRI</td>
                    <td>3.000.000</td>
                    <td>evoganteng@gmail.com</td>
                    <td>0213894828</td>
                    <td>Tetap semangat kak</td>
                </tr>
                <tr>
                    <td>Fauzan Ganteng Bang</td>
                    <td>BRI</td>
                    <td>300.000</td>
                    <td>ojanojanojan@gmail.com</td>
                    <td>0213894828</td>
                    <td>Jangan menyerah ya kak. Tetap semangat</td>
                </tr>
                <tr>
                    <td>Fauzan Ganteng Bang</td>
                    <td>BRI</td>
                    <td>300.000</td>
                    <td>ojanojanojan@gmail.com</td>
                    <td>0213894828</td>
                    <td>Jangan menyerah ya kak. Tetap semangat</td>
                </tr>
                <tr>
                    <td>Fauzan Ganteng Bang</td>
                    <td>BRI</td>
                    <td>300.000</td>
                    <td>ojanojanojan@gmail.com</td>
                    <td>0213894828</td>
                    <td>Jangan menyerah ya kak. Tetap semangat</td>
                </tr>
                <tr>
                    <td>Fauzan Ganteng Bang</td>
                    <td>BRI</td>
                    <td>300.000</td>
                    <td>ojanojanojan@gmail.com</td>
                    <td>0213894828</td>
                    <td>Jangan menyerah ya kak. Tetap semangat</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection