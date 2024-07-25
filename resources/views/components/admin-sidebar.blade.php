  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar d-flex flex-column">

      <div class="sidebar-top d-flex">
          <img src="{{ asset('/assets/images/Logo Cari Adil 1.png') }}" class="m-2 pb-3" width="55rem" alt="">
          <h4 class="pt-3 px-1" style="font-weight:bold">Dashboard</h4>
      </div>

      <ul class="sidebar-nav" id="sidebar-nav">

          {{-- <img src="/assets/img/Logo Cari Adil 1.png" class="m-2 pb-3" alt=""> --}}

          <li class="nav-item">
              <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="/admin/dashboard">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed {{ request()->is('admin/pengajuan-perkara/*') ? 'active' : '' }} {{ request()->is('admin/perkara-berlangsung/*') ? 'active' : '' }}"
                  data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
                  <i class="bi bi-menu-button-wide"></i><span>Perkara</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="/admin/pengajuan-perkara">
                          <i class="bi bi-circle"></i><span>Pengajuan</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/perkara-berlangsung">
                          <i class="bi bi-circle"></i><span>Berlangsung</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Components Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed {{ request()->is('admin/role-admin/*') ? 'active' : '' }} {{ request()->is('admin/role-lbh/*') ? 'active' : '' }} {{ request()->is('admin/role-lbh/create') ? 'active' : '' }} {{ request()->is('admin/role-admin/create') ? 'active' : '' }}"
                  data-bs-target="#components-nav-account" data-bs-toggle="collapse" href="">
                  <i class="bi bi-menu-button-wide"></i><span>Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav-account" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="/admin/role-admin">
                          <i class="bi bi-circle"></i><span>Admin</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/role-lbh">
                          <i class="bi bi-circle"></i><span>User LBH</span>
                      </a>
                  </li>
              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed {{ request()->is('admin/donasi') ? 'active' : '' }} {{ request()->is('admin/donasi-konfirmasi') ? 'active' : '' }}"
                  data-bs-target="#components-nav-donation" data-bs-toggle="collapse" href="">
                  <i class="bi bi-wallet"></i><span>Donasi</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav-donation" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="/admin/donasi">
                          <i class="bi bi-circle"></i><span>Donasi</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/donasi-konfirmasi">
                          <i class="bi bi-circle"></i><span>Konfirmasi Transaksi Donasi</span>
                      </a>
                  </li>
              </ul>
          </li>
      </ul>
      <div style="height: 100%">

      </div>

      @if (Session::get('admin'))
          <div class="sidebar-bottom d-flex">
              <div class="nav-item" style="width: 100%">
                  <button type="submit" class="btn btn-outline-danger" style="width: 100%" data-bs-toggle="modal"
                      data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>&nbsp; Logout</button>
              </div>
          </div>
      @endif
  </aside><!-- End Sidebar-->

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
                  <form action="{{ route('admin.logout') }}" method="POST">
                      @csrf
                      @method('POST')

                      <button type="submit" class="btn btn-primary">Yakin</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
