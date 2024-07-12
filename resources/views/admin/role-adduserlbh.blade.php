@extends('components/admin-layout')

@section('title', 'Add User LBH')

@section('content')
    <div class="summary-area">
        <div class="row">
            <div class="col-6 px-3 stat">
                <div class="circle-icon">
                    <i class="bi bi-person-fill-check"></i>
                </div>
                <div class="info px-4">
                    <h6 class="title">Admin</h6>
                    <h2 class="value">5</h2>
                    <span class="increase">Ojan, Evo and 3 others ... </span>
                </div>
            </div>
            <div class="col-6 px-3 stat">
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

    <div class="form-area">
        <div class="row">
            <div class="col-5">
                <h6 style="font-weight: bold">Add New User LBH</h6>
                <p style="font-size: 0.75rem">Buat User LBH baru</p>
            </div>
            <div class="col-4"></div>
            <div class="col-3"></div>
        </div>

          <div class="mb-3">
            <label for="namaLBH" class="form-label">Nama Lembaga Bantuan Hukum</label>
            <input type="text" class="form-control" id="namaLBH">
          </div>
          <div class="mb-3">
            <label for="teleponLBH" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="teleponLBH">
          </div>
          <div class="mb-3">
            <label for="emailLBH" class="form-label">Email</label>
            <input type="text" class="form-control" id="emailLBH">
          </div>
          <div class="mb-3">
            <label for="alamatLBH" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamatLBH" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="passwordLBH" class="form-label">Password</label>
            <input type="text" class="form-control" id="passwordLBH">
          </div>

    </div>


@endsection