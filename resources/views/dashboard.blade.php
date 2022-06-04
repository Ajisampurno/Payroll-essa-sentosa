@extends('layouts.main')
@section('container')
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
      <h2 class="main-title">Dashboard</h2>
        <div class="row stat-cards">
          
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="users" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__title">Jumlah karyawan</p>
                <p class="stat-cards-info__num">175</p>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="user-check" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__title">Karyawan masuk kerja</p>
                <p class="stat-cards-info__num">165</p>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="user-x" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__title">Karyawan tidak masuk</p>
                <p class="stat-cards-info__num">10</p>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="watch" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__title">Karyawan lembur</p>
                <p class="stat-cards-info__num">75</p>
              </div>
            </article>
          </div>
        </div>
    

      <h2 class="main-title">Notif</h2>
      <!-- BADAN TABLE -->
      <div class="card-body">
        <table class="table table-light table-hover">
          <thead>
          <tr class="users-table-info">
              <th>No</th>
              <th>Date</th>
              <th>NIP</th>
              <th>NAMA</th>
              <th>Tgl Mulai</th>
              <th>Tgl Sampai</th>
              <th>Alasan</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @php
            $no=1;
        @endphp
          @foreach ($pengajuans as $pengajuan)
              <tr>
                  <td>
                    {{ $no++ }}
                  </td>
                  <td>
                    {{ $pengajuan->created_at }}
                  </td>
                  <td>
                    {{ $pengajuan->nip }}
                  </td>
                  <td>
                    {{ $pengajuan->nama_ktp }}
                  </td>
                  <td>
                    {{ $pengajuan->tgl_mulai }}
                  </td>
                  <td>
                    {{ $pengajuan->tgl_sampai }}
                  </td>
                  <td>
                    {{ $pengajuan->alasan }}
                  </td>
                  <td>
                    {{ $pengajuan->aproval }}
                  </td>
                  <td>
                    <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                        <div class="sr-only">More info</div>
                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                        <li><a href="/show_pengajuan/{{ $pengajuan->id }}">Show</a></li>
                        <li><a href="/update_datakaryawan/{{ $pengajuan->id }}">Edit</a></li>
                        <li>
                          <a href="/data_karyawan/hapus/{{ $pengajuan->id }}" class="" onclick="return confirm('Yakin ingin menghapus data?')">Trash</a>
                        </li>
                        </ul>
                    </span>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>      
    </main>

  
@endsection
