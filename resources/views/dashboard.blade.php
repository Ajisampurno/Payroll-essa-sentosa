
@extends('layouts.main')
@section('container')

<!-- partial -->
<div class="content-wrapper">
    <div class="col-lg-12">
      <div class="row justify-content-center">
        <div class="col-md-9 stretch-card grid-margin mt-3">
          <h2 class="font-weight-normal mb-3 text-center">Haii, {{Auth::user()->name}}</h2>
          <div class="card bg-gradient-info text-black">
            <div class="card-body" align="center">
              <h3 class="mb-2">Hari ini: <p id="waktu"></p></h3>
              <div class="row">              
              <h3 class="mt-4">Lokasi Anda:</h3>
              <p id="lokasi"></p>

              <h3 class="mt-4">status:</h3>
              <p id="status"></p>
              
              <button id="btn-alert-lokasi" class="btn btn-success mt-4">Lokasi anda tidak dalam radius</button>
              <a href="/absen">
                <button id="btn-rekamabsen" class="btn btn-success mt-4">Rekam absen</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
