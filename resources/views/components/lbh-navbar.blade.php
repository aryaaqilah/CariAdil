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
        <div class="navbar-profile">
            <div class="profile-icon">
                <i class="fa fa-user"></i>
            </div>
            <div class="profile-name">
                <span>
                    @if (Session::get('user'))
                        {{ Session::get('user')['nama_lbh'] }}
                    @endif
                </span>
            </div>
        </div>
    </div>
</nav>
