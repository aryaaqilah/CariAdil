@extends('master')

@section('title', 'Perkara Masuk')

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
                    <i class="bi bi-person-fill-check"></i>
                </div>
                <div class="info px-4">
                    <h6 class="title">Admin</h6>
                    <h2 class="value">5</h2>
                    <span class="increase">Ojan, Evo and 3 others ... </span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-area">
        <div class="row">
            <div class="col-5">
                <h6 style="font-weight: bold">Perkara Masuk</h6>
                <p style="font-size: 0.75rem">Verifikasi setiap permohonan perkara</p>
            </div>
            <div class="col-4"></div>
            <div class="col-3"></div>
        </div>
        <table class="table logaktivitas">
            <thead>
                <tr>
                    <th scope="col" width="430rem">Nama Pemohon</th>
                    <th scope="col" width="200rem">Tanggal Dikirim</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Putu Aryasatya Dharma Kenzhie</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Hosannia Michaela Marsinta Hardiputri</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>28 Mei 2024</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection