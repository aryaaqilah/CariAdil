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
                        <td>{{ $case->lbh->nama_lbh }}</td>
                        <td>{{ $case->created_at }}</td>
                        <td>{{ $case->description }}</td>
                        <td><button class="btn detail" type="button">Detail</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
