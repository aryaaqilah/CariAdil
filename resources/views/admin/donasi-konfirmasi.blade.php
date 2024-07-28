@extends('components/admin-layout')

@section('title', 'Konfirmasi Donasi')

@section('content')
    <div class="summary-area">
        <div class="row">
            <div class="col-6 px-3 stat">
                <div class="circle-icon">
                    <i class="bi bi-wallet"></i>
                </div>
                <div class="info px-4">
                    <h6 class="title">Transaksi Minggu Ini</h6>
                    <h2 class="value">{{ $countWeeklyTransactions }}</h2>
                    <span class="increase"><i class="bi bi-arrow-up"></i> {{ $persentaseKenaikan }}% bulan ini</span>
                </div>
            </div>
            <div class="col-6 px-3 stat">
                <div class="circle-icon">
                    <i class="bi bi-person-vcard"></i>
                </div>
                <div class="info px-4">
                    <h6 class="title">Donasi Terbesar</h6>
                    <h2 class="value">Rp {{ number_format($biggestDonation->nominal) }}</h2>
                    <span class="increase">dari {{ $biggestDonation->nama }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-area">
        <div class="row">
            <div class="col-5">
                <h6 style="font-weight: bold">Konfirmasi Donasi</h6>
                <p style="font-size: 0.75rem">Donasi yang perlu di konfirmasi</p>
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
                    <th scope="col" width="180rem">Time</th>
                    <th scope="col" width="210rem">Nama Donatur</th>
                    <th scope="col" width="100rem">Bank Asal</th>
                    <th scope="col" width="130rem">Nominal</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donation as $d)
                    <tr>
                        <td class="time">
                            <p id="date">{{ $d->created_at }}</p>
                        </td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->namaBank }}</td>
                        <td>{{ $d->nominal }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="/admin/donasi-konfirmasi/terima/{{ $d->id_transaksi }}" method="POST">
                                    @csrf
                                    @method('POST')

                                    <button type="submit" class="accept">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16" stroke-width="3">
                                            <path
                                                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                        </svg>
                                    </button>
                                </form>
                                {{-- <div class="deny">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path
                                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                    </svg>
                                </div> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
