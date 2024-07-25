<nav class="navbar-section">
    <div class="navbar container">
        <div class="navbar-logo">
            <a href="/">
                <img src="{{ asset('assets\images\Logo CariAdil.png') }}" alt="">
            </a>
        </div>
        <div class="navbar-navigation">
            <ul>
                <li class="navbar-item">
                    <a href="/lbh/">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="/lbh/perkara-berlangsung">Perkara</a>
                </li>
                <li class="navbar-item">
                    <a href="/lbh/pengajuan-bantuan-hukum">Pengajuan</a>
                </li>
                <li class="navbar-item">
                    <a href="/lbh/riwayat-kasus">Riwayat</a>
                </li>
            </ul>
        </div>
        @if (Session::get('user'))
            <button type="button" class="navbar-profile" data-bs-toggle="modal" data-bs-target="#logoutModal">
                <div class="profile-icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="profile-name">
                    <span>
                        {{ Session::get('user')['nama_lbh'] }}
                    </span>
                </div>
            </button>
        @endif
    </div>
</nav>

<div class="modal fade" id="logoutModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="/lbh/logout" method="POST">
                    @csrf
                    @method('POST')

                    <button type="submit" class="btn btn-primary">Yakin</button>
                </form>
            </div>
        </div>
    </div>
</div>
