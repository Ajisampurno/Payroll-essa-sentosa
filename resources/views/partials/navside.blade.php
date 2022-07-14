<div class="layer"></div>
  <!-- ! Body -->
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
      <div class="sidebar-start">
          <div class="sidebar-head">
              <a href="/dashboard" class="logo-wrapper" title="Home">
                  <span class="sr-only">Home</span>
                  <img class="rounded" src="/img/logo.png" alt="">
                  <div class="logo-text">
                      <span class="logo-title">Essa Sentosa</span>
                    <!--  <span class="logo-subtitle">Dashboard</span> -->
                  </div>

              </a>
              <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                  <span class="sr-only">Toggle menu</span>
                  <span class="icon menu-toggle" aria-hidden="true"></span>
              </button>

          </div>
          <div class="sidebar-body">
              <ul class="sidebar-body-menu">
                <li>
                    <a class="{{ ($title === "Dashboard")?'active':'' }}" href="/dashboard"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                  <a class="" href="/cetak_slip_gaji/{{ auth()->user()->nip }}"><span class="icon document" aria-hidden="true"></span>Pay slip</a>
                </li>
                <li>
                  <a class="{{ ($title === "Pengajuan")?'active':'' }} " href="/pengajuan"> <span class="icon document" aria-hidden="true"></span> Pengajuan</a>
                </li>

                @if (auth()->user()->ceklevel=="admin")
                  <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Penilaian
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">                                   
                      <li>
                        <a class="{{ ($title === "Data karyawan")?'active':'' }}" href="/data_karyawan">Form penilaian</a>
                      </li>
                      <li>
                        <a class="{{ ($title === "Rangking Board")?'active':'' }}" href="/rangkingboard">Ranking Board</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Admin
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                      <li>
                          <a href="/data_karyawan">Data karyawan</a>
                      </li>
                      <li>
                        <a href="/upah_potongan">Salery report</a>
                      </li>
                    </ul>
                  </li>    
                @endif
              </ul>  
          </div>
      </div>
  </aside>

<div class="main-wrapper">
  <!-- ! Main nav -->
  <nav class="main-nav--bg">
<div class="container main-nav">
  <div class="main-nav-start">
  </div>
  <div class="main-nav-end">
    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
      <span class="sr-only">Toggle menu</span>
      <span class="icon menu-toggle--gray" aria-hidden="true"></span>
    </button>
    <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
      <span class="sr-only">Switch theme</span>
      <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
      <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
    </button>
    <a href="/logout">
      <button class="btn btn-danger">
        Logout
      </button>
    </a>
  </div>
</div>
</nav>