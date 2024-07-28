<link rel="stylesheet" href="{{ asset('/style/styles.css') }}">

@extends('components/admin-layout')

@section('title', 'Perkara Pengajuan')

@section('content')
    <div class="summary-area">
        <div class="row">
            <div class="col-6 stat ml-3">
                <div class="circle-icon-area">
                    <div class="circle-icon">
                        <i class="bi bi-person-fill-check"></i>
                    </div>
                </div>
                <div class="info px-4">
                    <h6 class="title">Belum Diverifikasi</h6>
                    <h2 class="value">{{ count($belumVerifikasi) }}</h2>
                    <span class="increase">
                        @foreach ($belumVerifikasi->take(1) as $p)
                            {{ $p->nama }}
                        @endforeach
                        {{ count($belumVerifikasi) - 1 < 0 ? '' : ' and ' . count($belumVerifikasi) - 1 . ' others' }}
                    </span>
                </div>
            </div>
            <div class="col-6 stat">
                <div class="circle-icon-area">
                    <div class="circle-icon">
                        <i class="bi bi-person-fill-check"></i>
                    </div>
                </div>
                <div class="info px-4">
                    <h6 class="title">Sudah diverifikasi</h6>
                    <h2 class="value">{{ count($verifikasi) }}</h2>
                    <span class="increase">
                        @foreach ($verifikasi->take(1) as $p)
                            {{ $p->nama }}
                        @endforeach
                        {{ count($verifikasi) - 1 < 0 ? '' : ' and ' . count($verifikasi) - 1 . ' others' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-area">
        <div class="row">
            <div class="col-5">
                <h6 style="font-weight: bold">Perkara Pengajuan</h6>
                <p style="font-size: 0.75rem">Verifikasi setiap permohonan perkara</p>
            </div>
            <div class="col-4"></div>
            <div class="col-3"></div>
        </div>
        <table class="table logaktivitas">
            <thead>
                <tr>
                    <th scope="col" width="370rem">Nama Pemohon</th>
                    <th scope="col" width="170rem">Tanggal Dikirim</th>
                    <th scope="col" width="100rem">Kategori</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cases as $c)
                    <tr>
                        <td>{{ $c->nama }}</td>
                        <td>{{ $c->tanggal }}</td>
                        <td>{{ $c->jenis_perkara }}</td>
                        @if ($c->jenis_perkara == null)
                            <td><a class="btn detail" href="{{ route('detail_pengajuan_perkara', $c->id_form) }}"
                                    type="button">Detail</a>
                            </td>
                        @else
                            <td><button class="btn detail" href="{{ route('detail_pengajuan_perkara', $c->id_form) }}"
                                    type="button" disabled>Completed</button></td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
