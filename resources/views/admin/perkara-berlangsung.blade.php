@extends('components/admin-layout')

@section('title', 'Perkara Berlangsung')

@section('content')

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
                @foreach ($cases as $case)
                    <tr>
                        <td>{{ $case->id_kasus }}</td>
                        <td>{{ $case->form->nama }}</td>
                        @if (!empty($case->lbh->nama_lbh))
                            <td>{{ $case->lbh->nama_lbh }}</td>
                        @else
                            <td>-</td>
                        @endif
                        <td>{{ \Carbon\Carbon::parse($case->created_at)->translatedFormat('l, j F Y') }}</td>
                        <td>{{ $case->description }}</td>
                        @if ($case->description == null)
                            <td><a class="btn detail" href="/admin/perkara-berlangsung/{{ $case->id_kasus }}"
                                    type="button">Detail</a>
                            </td>
                        @else
                            <td><button class="btn detail" href="{{ route('detail_pengajuan_perkara', $case->id_form) }}"
                                    type="button" disabled>Completed</button></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
