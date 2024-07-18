@extends('components/admin-layout')

@section('title', 'Role Page')

@section('content')
    <div class="summary-area">
        <div class="row">
            <div class="col-6 stat">
                <div class="circle-icon-area">
                    <div class="circle-icon">
                        <i class="bi bi-person-fill-check"></i>
                    </div>
                </div>
                <div class="info px-4">
                    <h6 class="title">Admin</h6>
                    <h2 class="value">{{ count($admins) }}</h2>
                    <span class="increase">
                        @foreach ($admins->take(2) as $admin)
                            {{ $admin->username }},
                        @endforeach
                        {{ count($admins) - 2 < 0 ? '' : ' and ' . count($admins) - 2 . ' others' }}
                    </span>
                </div>
            </div>
            <div class="col-6 px-3 stat">
                <div class="circle-icon-area">
                    <div class="circle-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
                <div class="info px-4">
                    <h6 class="title">User LBH</h6>
                    <h2 class="value">{{ count($lbh) }}</h2>
                    <span class="increase">
                        @foreach ($lbh->take(2) as $user_lbh)
                            {{ $user_lbh->nama_lbh }},
                        @endforeach
                        {{ count($lbh) - 2 < 0 ? '' : ' and ' . count($lbh) - 2 . ' others' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="add-area">
        <a href="/admin/role-admin/create">
            <button type="button" class="btn"><i class="bi bi-person-fill-add"></i> Add Admin</button>
        </a>
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
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->id_admin }}</td>
                        <td>{{ $admin->username }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
