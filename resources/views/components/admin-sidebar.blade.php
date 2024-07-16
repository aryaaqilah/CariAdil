  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <div class="sidebar-top d-flex">
          <img src="{{ asset('/assets/images/Logo Cari Adil 1.png') }}" class="m-2 pb-3" width="55rem" alt="">
          <h4 class="pt-3 px-1" style="font-weight:bold">@yield('title')</h4>
      </div>

      <ul class="sidebar-nav" id="sidebar-nav">

          {{-- <img src="/assets/img/Logo Cari Adil 1.png" class="m-2 pb-3" alt=""> --}}

          <li class="nav-item">
              <a class="nav-link " href="/admin/dashboard">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
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
              <a class="nav-link collapsed" data-bs-target="#components-nav-account" data-bs-toggle="collapse"
                  href="">
                  <i class="bi bi-menu-button-wide"></i><span>Role</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav-account" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="/admin/pengajuan-perkara">
                          <i class="bi bi-person"></i><span>Account</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/perkara-berlangsung">
                          <i class="bi bi-circle"></i><span>Berlangsung</span>
                      </a>
                  </li>
              </ul>
          </li><!--

          <li class="nav-item">
              <a class="nav-link collapsed" href="/admin/donasi">
                  <i class="bi bi-journal-text"></i>
                  <span>Donasi</span>
              </a>
          </li>

          <!-- End Forms Nav -->



  </aside><!-- End Sidebar-->
