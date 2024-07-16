@extends('components/admin-layout')

@section('title', 'Perkara Diproses')

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
                <h6 style="font-weight: bold">Perkara Pengajuan</h6>
                <p style="font-size: 0.75rem">Menunggu LBH yang bertanggung jawab</p>
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
                        <td><a class="btn detail" href="{{ route('detail_pengajuan_perkara', $c->id_form) }}"
                                type="button">Detail</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
