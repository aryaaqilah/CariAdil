  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <div class="sidebar-top d-flex">
          <img src="{{ asset('/assets/images/Logo Cari Adil 1.png') }}" class="m-2 pb-3" width="55rem" alt="">
          <h4 class="pt-3 px-1" style="font-weight:bold">Dashboard</h4>
      </div>

      <ul class="sidebar-nav" id="sidebar-nav">

          {{-- <img src="/assets/img/Logo Cari Adil 1.png" class="m-2 pb-3" alt=""> --}}

          <li class="nav-item">
              <a class="nav-link " href="/">
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
                      <a href="components-alerts.html">
                          <i class="bi bi-circle"></i><span>Masuk</span>
                      </a>
                  </li>
                  <li>
                      <a href="components-accordion.html">
                          <i class="bi bi-circle"></i><span>Pengajuan</span>
                      </a>
                  </li>
                  <li>
                      <a href="components-badges.html">
                          <i class="bi bi-circle"></i><span>Berlangsung</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Components Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="/donasi">
                  <i class="bi bi-journal-text"></i><span>Donasi</span>
              </a>
          </li><!-- End Forms Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="/role">
                  <i class="bi bi-layout-text-window-reverse"></i><span>Role</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="tables-general.html">
                          <i class="bi bi-circle"></i><span>Admin</span>
                      </a>
                  </li>
                  <li>
                      <a href="tables-data.html">
                          <i class="bi bi-circle"></i><span>User LBH</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Tables Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="/log">
                  <i class="bi bi-bar-chart"></i><span>Log</span>
              </a>
          </li><!-- End Charts Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="users-profile.html">
                  <i class="bi bi-person"></i>
                  <span>Profile</span>
              </a>
          </li><!-- End Profile Page Nav -->

  </aside><!-- End Sidebar-->
