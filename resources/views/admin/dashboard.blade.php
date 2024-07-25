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
                    <h2 class="value">{{ count($pengajuan) }}</h2>
                    <span class="increase">
                        @foreach ($pengajuan->take(1) as $p)
                            {{ $p->nama }}
                        @endforeach
                        {{ count($pengajuan) - 1 < 0 ? '' : ' and ' . count($pengajuan) - 1 . ' others' }}
                    </span>
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
                    <h2 class="value">{{ count($donasi) }}</h2>
                    <span class="increase">
                        @foreach ($donasi->take(1) as $d)
                            {{ $d->nama }}
                        @endforeach
                        {{ count($donasi) - 1 < 0 ? '' : ' and ' . count($donasi) - 1 . ' others' }}
                    </span>
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
                    <h2 class="value">{{ count($lbh) }}</h2>
                    <span class="increase">
                        @foreach ($lbh->take(1) as $l)
                            {{ $l->nama }}
                        @endforeach
                        {{ count($lbh) - 1 < 0 ? '' : ' and ' . count($lbh) - 1 . ' others' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="date-area">
        <h4 style="font-weight: bold">Today</h4>
        <h6 style="font-size: 0.8rem">28 Mei 2024</h6>
    </div>

    <div class="row big-stat-area justify-content-between">
        <div class="col-6 big-stat">
            <h6 style="font-weight: bold">Perkara Pengajuan</h6>
            <p style="font-size: 0.75rem">Verifikasi setiap permohonan perkara</p>
            <table class="table logaktivitas">
                <thead>
                    <tr>
                        <th scope="col" width="100rem">Nama Pemohon</th>
                        <th scope="col">Tanggal Dikirim</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengajuan as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->tanggal }}</td>
                            <td><a class="btn detail" type="button"
                                    href="{{ route('detail_pengajuan_perkara', $p->id_form) }}"
                                    style="width: 4rem; font-size:0.7rem">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6 big-stat" style="margin-right: 0">
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
                    @foreach ($kasusHukum as $k)
                        <tr>
                            <td>{{ $k->id_kasus }}</td>
                            <td>{{ $k->nama }}</td>
                            <td>{{ $k->nama_lbh }}</td>
                            <td><a class="btn detail" href="{{ route('detail_perkara_berlangsung', $k->id_form) }}"
                                    style="width: 4rem; font-size:0.7rem">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="summary-area">
        <h6 style="font-weight: bold">Update Donasi</h6>
        <p style="font-size: 0.75rem">Banyak donasi yang terkumpul hingga sekarang</p>
        <div class="row">
            @foreach ($cases as $case)
                @php
                    $total = 0;
                    foreach ($case->approvedTransactions as $transaction) {
                        $total += $transaction->nominal;
                    }

                    $percentage = ($total / $case->target_donasi) * 100;
                @endphp
                <div class="progress-bar-area">
                    <div class="progress vertical">
                        <div class="progress-bar-vertical" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" style="height: {{ $percentage }}%"></div>
                    </div>
                    <h5 class="progress-text">{{ $case->form->nomor_pemohon }}</h5>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('customJS')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
