
@extends('layouts.main')
@section('container')

<!-- partial -->
<div class="content-wrapper">
    <div class="col-lg-12">
      <div class="row justify-content-center">
        @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
        @endif
        <div class="col-md-9 stretch-card grid-margin mt-3">
          <h2 class="font-weight-normal mb-3 text-center">Haii, {{Auth::user()->name}}</h2>
          <div class="card bg-gradient-info text-black">
            <div class="card-body p-5" align="center">
              <h3 class="mb-2">Hari ini: <p id="waktu"></p></h3>
              <div class="row">              
              <h3 class="mt-4">Lokasi Anda:</h3>
              <p id="lokasi"></p>
              <br>
              <br>
              <button id="btn-alert-lokasi" class="btn btn-success mt-4">Lokasi anda tidak dalam radius</button>
              <button type="button" class="btn btn-primary" id="btn-rekamabsen" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Absen
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 text-center">
              <div class="d-flex justify-content-center align-items-center">
                <video class="preview" id="preview" autoplay playsinline></video>
                <canvas class="output" id="output"></canvas>
                  <img class="result" id="result" src="" alt="">
                  <br>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="d-flex justify-content-center align-items-center">
          <button id="capture" class="btn btn-danger">ambil</button>
          <!-- form data absen In -->
          <form action="/simpan_absen" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="nip" value="{{Auth::user()->nip}}">
              <input id="value_gambar" type="hidden" name="gambar">
              <p id="status"></p>
              <button id="btnsimpan" type="submit" class="btn btn-success me-2">simpan</button>
          </form>
          <!-- Form data absen Out -->
          <form action="/simpan_absenout" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="nip">
              <input id="value_gambar" type="hidden" name="gambar">
              <input type="hidden" name="time">
              <input type="hidden" name="status">
              <button id="btnsimpanout" type="submit" class="btn btn-success">simpan out</button>
          </form>
          <!-- Tombol ulang -->
          <button id="ulang" class="btn btn-info">Ulang</button>                
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/js/waktu.js"></script>
<script src="/js/camera.js"></script>
@endsection
