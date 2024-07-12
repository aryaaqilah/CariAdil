@extends('components/admin-layout')

@section('title', 'Perkara Berlangsung')

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
                <h6 style="font-weight: bold">Perkara Berlangsung</h6>
                <p style="font-size: 0.75rem">Perkara yang sedang berlangsung</p>
            </div>
            <div class="col-4"></div>
            <div class="col-3"></div>
        </div>
        <table class="table logaktivitas">
            <thead>
                <tr>
                    <th scope="col" width="70rem">ID Perkara</th>
                    <th scope="col" width="150rem">Nama Pemohon</th>
                    <th scope="col" width="100rem">LBH</th>
                    <th scope="col" width="110rem">Tanggal Diterima</th>
                    <th scope="col" width="120rem">Berita</th>
                    <th scope="col" width="120rem">Progress</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
                <tr>
                    <td>P00020</td>
                    <td>Joeliardo Gerald Leviothniel</td>
                    <td>LBH Mawar Saron</td>
                    <td>28 Mei 2024</td>
                    <td>Perjuangan untuk Mendapat Hak Cipta</td>
                    <td><button class="btn detail" type="button">Detail</button></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection