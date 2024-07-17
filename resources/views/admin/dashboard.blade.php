@extends('components/admin-layout')

@section('title', 'Dashboard')

@section('content')
    <div class="summary-area">
        <div class="row">
            <div class="col-4 stat">
                <div class="circle-icon-area">
                    <div class="circle-icon">
                        <i class="bi bi-chat-left-text-fill"></i>
                    </div>
                </div>
                <div class="info px-4">
                    <h6 class="title">Perkara Pengajuan</h6>
                    <h2 class="value">4</h2>
                    <span class="increase">Joeliardo G. L. and 3 others</span>
                </div>
            </div>
            <div class="col-4 stat">
                <div class="circle-icon-area">
                    <div class="circle-icon">
                        <i class="bi bi-check-square-fill"></i>
                    </div>
                </div>
                <div class="info px-4">
                    <h6 class="title">Konfirmasi Donasi</h6>
                    <h2 class="value">10</h2>
                    <span class="increase">Grisella M. and 9 others</span>
                </div>
            </div>
            <div class="col-4 stat">
                <div class="circle-icon-area">
                    <div class="circle-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
                <div class="info px-4">
                    <h6 class="title">User LBH</h6>
                    <h2 class="value">10</h2>
                    <span class="increase">LBH Ojan Lomba and 9 others</span>
                </div>
            </div>
        </div>
    </div>

    <div class="date-area">
        <h4 style="font-weight: bold">Today</h4>
        <h6 style="font-size: 0.8rem">28 Mei 2024</h6>
    </div>

    <div class="row big-stat-area">
        <div class="col-5 big-stat">
            <h6 style="font-weight: bold">Perkara Pengajuan</h6>
            <p style="font-size: 0.75rem">Verifikasi setiap permohonan perkara</p>
            <table class="table logaktivitas">
                <thead>
                    <tr>
                        <th scope="col" width="100rem">Nama Pemohon</th>
                        <th scope="col">Tanggal Dikirim</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Joeliardo G. L.</td>
                        <td>28/05/2024</td>
                        <td>Pidana</td>
                        <td><button class="btn detail" type="button" style="width: 4rem; font-size:0.7rem">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-5 big-stat" style="margin-right: 0">
            <h6 style="font-weight: bold">Perkara Berlangsung</h6>
            <p style="font-size: 0.75rem">Menunggu konfirmasi User LBH</p>
            <table class="table logaktivitas">
                <thead>
                    <tr>
                        <th>ID Perkara</th>
                        <th>Nama Pemohon</th>
                        <th>LBH</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P0010</td>
                        <td>Evotianus</td>
                        <td>LBH Ojanlomba</td>
                        <td><button class="btn detail" type="button" style="width: 4rem; font-size:0.7rem">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="summary-area">
        <h6 style="font-weight: bold">Update Donasi</h6>
        <p style="font-size: 0.75rem">Banyak donasi yang terkumpul hingga sekarang</p>
        <div class="row">
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0011</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0012</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0013</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0014</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0015</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0016</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0017</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0018</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0019</h5>
            </div>
            <div class="progress-bar-area">
                <div class="progress vertical">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="10%"></div>
                </div>
                <h5 class="progress-text">P0020</h5>
            </div>
            
        </div>
    </div>

@endsection

@section('customJS')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
