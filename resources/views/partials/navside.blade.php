<div class="layer"></div>
  <!-- ! Body -->
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
      <div class="sidebar-start">
          <div class="sidebar-head">
            <a href="/dashboard" class="logo-wrapper" title="Home">
              <img src="{{ asset('images/logo.png') }}" class="mx-auto d-block" alt="">
            </a>
            <button class="sidebar-toggle transparent-btn mt-2" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
          </div>
          <div class="sidebar-body">
              <ul class="sidebar-body-menu">
                <li>
                    <a class="{{ ($title === "Dashboard")?'active':'' }}" href="/dashboard"><span class="icon" data-feather="home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <!-- Jika yg buka adalah manager -->
                @if (auth()->user()->ceklevel=="user")
                  <li>
                      <a class="{{ ($title === "Rangking Board")?'active':'' }}" href="/rangkingboard"><span data-feather="award" class="icon" aria-hidden="true"></span>Rangking Board</a>
                  </li>  
                  <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Pengajuan
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                      <li>
                          <a href="/pengajuan">Mengajukan</a>
                      </li>
                      <li>
                        <a href="/show_pengajuan">Pengajuan Saya</a>
                      </li>
                    </ul>
                  </li> 
                @else
                  <li>
                      <a class="{{ ($title === "Report")?'active':'' }}" href="/report"><span data-feather="pie-chart" class="icon" aria-hidden="true"></span>Report</a>
                  </li>
                  <li>
                      <a class="{{ ($title === "Manage User")?'active':'' }}" href="/manageuser"><span data-feather="users" class="icon" aria-hidden="true"></span>Manage Users</a>
                  </li>
                  <li>
                      <a class="{{ ($title === "Form penilaian")?'active':'' }}" href="/formPK"><span class="icon" data-feather="file-text" aria-hidden="true"></span>Form Penilaian</a>
                  </li>
                  <li>
                      <a class="{{ ($title === "Rangking Board")?'active':'' }}" href="/rangkingboard"><span data-feather="award" class="icon" aria-hidden="true"></span>Rangking Board</a>
                  </li>
                  <li>
                      <a class="{{ ($title === "Data karyawan")?'active':'' }}" href="/data_karyawan"><span data-feather="clipboard" class="icon" aria-hidden="true"></span>Data Karyawan</a>
                  </li>
                  <li>
                    <a class="{{ ($title === "Setting Nilai")?'active':'' }}" href="/settingnilai"><span data-feather="settings" class="icon" aria-hidden="true"></span>Setting</a>
                  </li>
                  <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Pengajuan
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                      <li>
                          <a href="/pengajuan">Mengajukan</a>
                      </li>
                      <li>
                        <a href="/show_pengajuan">Pengajuan Saya</a>
                      </li>
                    </ul>
                  </li> 
                @endif

                <!--
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
                        <a class="{{ ($title === "Data karyawan")?'active':'' }}" href="/formPK">Form penilaian</a>
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
                      <li>
                        <a href="/request_karyawan">Request karyawan</a>
                      </li>
                    </ul>
                  </li>    
                  @endif
                  <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Pengajuan
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                      <li>
                          <a href="/pengajuan">Mengajukan</a>
                      </li>
                      <li>
                        <a href="/show_pengajuan">Pengajuan Saya</a>
                      </li>
                    </ul>
                  </li>
                
                  <li>
                    <form action="/cetak_slip_gaji/pdf" method="post">
                      @csrf
                      <input type="hidden" name="nip" value="{{ auth()->user()->nip }}">
                      <a>
                        <button class="btn btn-primary-outline p-0 " style="color:white" type="submit"><span class="icon document me-2" aria-hidden="true"></span>Pay slip</button>
                      </a>                    
                    </form>
                  </li>
                -->

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
    <!--<button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
      <span class="sr-only">Switch theme</span>
      <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
      <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
    </button>-->
    
    <div class="">
      <img src="/storage/{{ auth()->user()->foto }}" class="dropdown-toggle rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false" alt="Cinque Terre" width="40" height="40">
 
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" style="color: red" href="/logout">Logout</a></li>
      </ul>
    </div>
     
  </div>
</div>
</nav>