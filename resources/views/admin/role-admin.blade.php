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
        <button type="button" class="btn"><i class="bi bi-person-fill-add"></i> Add Admin</button>
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
                    <th scope="col" width="100rem">ID</th>
                    <th scope="col" width="">Username</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A001</td>
                    <td>EvotianaEvo</td>
                </tr>
                <tr>
                    <td>A002</td>
                    <td>DiandraKina</td>
                </tr>
                <tr>
                    <td>A003</td>
                    <td>Andreaseas</td>
                </tr>
                <tr>
                    <td>A004</td>
                    <td>Ojanlomba</td>
                </tr>
                <tr>
                    <td>A005</td>
                    <td>AgnesOwo</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection