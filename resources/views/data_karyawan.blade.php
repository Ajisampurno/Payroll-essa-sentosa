
@extends('layouts.main')
@section('container')
<main class="main users chart-page" id="skip-target">
    <div class="container">
      <h2 class="main-title text-center">Data karyawan</h2>

      <!-- BUTTON EXPORT IMPORT -->
      <button class="btn btn-success" >
        <a href="/export_profiles">Export</a>
      </button>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Import
      </button>

      <div class="row justify-content-center">
        <div class="col-sm-7">
          <div class="card">
            <!-- INPUT SEARC -->
            <div class="card-header d-inline-block">
              <div class="search-wrapper">
                <i data-feather="search" aria-hidden="true"></i>
                <input type="text" placeholder="Enter keywords ..." required>
              </div>
            </div>
              <!-- BADAN TABLE -->
              <div class="card-body">
                <table class="table table-light table-hover">
                  <thead>
                  <tr class="users-table-info">
                      <th>No</th>
                      <th>NIP</th>
                      <th>NAMA</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $no=1;
                @endphp
                  @foreach ($profiles as $profile)
                      <tr>
                          <td>
                              {{ $no++ }}
                          </td>
                          <td>
                              {{ $profile->nip }}
                          </td>
                          <td>
                              {{ $profile->nama_ktp }}
                          </td>
                          <td>
                          <span class="p-relative">
                              <button class="dropdown-btn transparent-btn" type="button" title="More info">
                              <div class="sr-only">More info</div>
                              <i data-feather="more-horizontal" aria-hidden="true"></i>
                              </button>
                              <ul class="users-item-dropdown dropdown">
                              <li><a href="/show_profiles/{{ $profile->id }}">Show</a></li>
                              <li><a href="##">Edit</a></li>
                              <li><a href="##">Trash</a></li>
                              </ul>
                          </span>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import excel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/import_profiles" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="file" name="file" required="required">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">keluar</button>
              <button type="submit" class="btn btn-primary">Selesai</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <!-- ! Footer -->
  <footer class="footer">
<div class="container footer--flex">
  <div class="footer-start">
    <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
        rel="noopener noreferrer">elegant-dashboard.com</a></p>
  </div>
  <ul class="footer-end">
    <li><a href="##">About</a></li>
    <li><a href="##">Support</a></li>
    <li><a href="##">Puchase</a></li>
  </ul>
</div>
</footer>
</div>
</div>

@endsection