@extends('components/admin-layout')

@section('title', 'Donasi Page')

@section('content')
    <div class="summary-area">
        <div class="row">
            <div class="col-6 px-3 stat">
                <div class="circle-icon">
                    <i class="bi bi-wallet"></i>
                </div>
                <div class="info px-4">
                    <h6 class="title">Transaksi Minggu Ini</h6>
                    <h2 class="value">30</h2>
                    <span class="increase"><i class="bi bi-arrow-up"></i> 16% bulan ini</span>
                </div>
            </div>
            <div class="col-6 px-3 stat">
                <div class="circle-icon">
                    <i class="bi bi-person-vcard"></i>
                </div>
                <div class="info px-4">
                    <h6 class="title">Donasi Terbesar</h6>
                    <h2 class="value">Rp3.000.000</h2>
                    <span class="increase">dari Epok Epok</span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-area">
        <div class="row">
            <div class="col-5">
                <h6 style="font-weight: bold">Donasi</h6>
                <p style="font-size: 0.75rem">Donasi yang sedang berlangsung</p>
            </div>
            <div class="col-4">
                <div class="input-group">
                    <span class="input-group-text" id="search-icon">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
            <div class="col-3">
                <select class="form-select" aria-label="sortby">
                    <option selected>Sort by</option>
                    <option value="1">Oldest</option>
                    <option value="2">Newest</option>
                  </select>
            </div>
        </div>
        <table class="table logaktivitas">
            <thead>
                <tr>
                    <th scope="col">Nama Pemohon</th>
                    <th scope="col">ID Kasus</th>
                    <th scope="col">Terkumpul</th>
                    <th scope="col">Target</th>
                    <th scope="col">Persentase</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn complete" type="button">Completed</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
                <tr>
                    <td>Ariya Gunananda</td>
                    <td>P000020</td>
                    <td>Rp5.000.000</td>
                    <td>Rp20.000.000</td>
                    <td>25%</td>
                    <td><button class="btn inprogress" type="button">In Progress</button></td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection