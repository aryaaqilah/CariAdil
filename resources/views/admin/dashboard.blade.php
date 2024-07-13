@extends('components/admin-layout')

@section('title', 'Dashboard Page')

@section('content')
    <div class="summary-area">
        <div class="row">
            <div class="col-4 px-3 stat">
                <div class="circle-icon">
                    <i class="bi bi-person-fill-check"></i>
                </div>
                <div class="info px-4">
                    <h6 class="title">Admin</h6>
                    <h2 class="value">5</h2>
                    <span class="increase">Ojan, Evo and 3 others ... </span>
                </div>
            </div>
            <div class="col-4 px-3 stat">
                <div class="circle-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="info px-4">
                    <h6 class="title">User LBH</h6>
                    <h2 class="value">10</h2>
                    <span class="increase">LBH Ojan Lomba and 9 others</span>
                </div>
            </div>
            <div class="col-4 px-3 stat">
                <div class="circle-icon">
                    <i class="bi bi-people-fill"></i>
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

    <div class="row db">
        <div class="col-5 big-stat">
            <h6 style="font-weight: bold">Perkara Masuk</h6>
            <p style="font-size: 0.75rem">Verifikasi setiap permohonan perkara</p>
        </div>
        <div class="col-5 big-stat">
            <h6 style="font-weight: bold">Perkara Diproses</h6>
            <p style="font-size: 0.75rem">Menunggu konfirmasi User LBH</p>
        </div>
    </div>

    <div class="form-area">
        <h6 style="font-weight: bold">Update Donasi</h6>
        <p style="font-size: 0.75rem">Banyak donasi yang terkumpul hingga sekarang</p>
        <div class="row text-center">
            <div class="col-1 bar-stat">
                <div class="bar" style="height: 80%"></div>
                <div class="w-100">D21</div>
            </div>
        </div>
    </div>

@endsection

@section('customJS')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection