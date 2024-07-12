@extends('components/admin-layout')

@section('title', 'Role Page')

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

    <div class="add-area">
        <button type="button" class="btn"><i class="bi bi-person-fill-add"></i> Add User LBH</button>
    </div>

    <div class="form-area">
        <div class="row">
            <div class="col-5">
                <h6 style="font-weight: bold">Admin</h6>
                <p style="font-size: 0.75rem">Daftar admin</p>
            </div>
            <div class="col-4"></div>
            <div class="col-3"></div>
        </div>
        <table class="table logaktivitas">
            <thead>
                <tr>
                    <th scope="col" width="70rem">ID</th>
                    <th scope="col" width="150rem">Nama</th>
                    <th scope="col" width="120rem">Nomor Telepon</th>
                    <th scope="col" width="">Email</th>
                    <th scope="col" width="">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Mawar Saron</td>
                    <td>03547382033</td>
                    <td>lbhmawarsaron@gmail.com</td>
                    <td>Jalan Kerayonan Lama No. 10, Kanoranan, Olam, Jakarta Pusat</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
                <tr>
                    <td>U001</td>
                    <td>LBH Jakarta</td>
                    <td>03547382033</td>
                    <td>lbhjakarta@gmail.com</td>
                    <td>Jalan Puri Indah No. 30, Bekasi</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection