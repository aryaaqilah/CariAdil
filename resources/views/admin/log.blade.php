@extends('components/admin-layout')

@section('title', 'Log Aktivitas')

@section('content')
    <div class="form-area">
        <div class="row">
            <div class="col-5">
                <h6 style="font-weight: bold">Log Aktivitas</h6>
                <p style="font-size: 0.75rem">Catatan aktivitas</p>
            </div>
            {{-- <div class="col-4">Search bar</div> --}}
            {{-- <div class="col-3 d-flex justify-content-end">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Sort by</button>
                <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Newest</a></li>
                    <li><a href="#" class="dropdown-item">Oldest</a></li>
                </ul>
            </div> --}}
        </div>
        <table class="table logaktivitas">
            <thead>
                <tr>
                    <th scope="col" width="130rem">Time</th>
                    <th scope="col" width="100rem">Role</th>
                    <th scope="col" width="180rem">Name</th>
                    <th scope="col" width="100rem">Action</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>Ojan Fauzan</td>
                    <td>Update</td>
                    <td>Riwayat Penarikan Donasi</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>LBH Jakarta</td>
                    <td>View</td>
                    <td>Pengajuan Perkara</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>Arya Fauzan</td>
                    <td>Create</td>
                    <td>New User LBH</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>Arya Fauzan</td>
                    <td>Update</td>
                    <td>Perkara Masuk</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>LBH Mawar Saron</td>
                    <td>View</td>
                    <td>Pengajuan Perkara</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>Arya Fauzan</td>
                    <td>Delete</td>
                    <td>Berita Kasus Hukum</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>Ojan Fauzan</td>
                    <td>Create</td>
                    <td>Berita Kasus Hukum</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>Ojan Fauzan</td>
                    <td>Create</td>
                    <td>Riwayat Penarikan Donasi</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>Ojan Fauzan</td>
                    <td>View</td>
                    <td>Riwayat Penarikan Donasi</td>
                </tr>
                <tr>
                    <td class="time">
                        <p id="date">30/05/2024</p>
                        <p id="hours">03:00</p>
                    </td>
                    <td>Admin</td>
                    <td>LBH Bhakti Keadilan</td>
                    <td>Delete</td>
                    <td>Progress Perkara</td>
                </tr>
            </tbody>
            
        </table>
    </div>
@endsection