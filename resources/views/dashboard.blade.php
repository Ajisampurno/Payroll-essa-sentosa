
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

                @foreach ($abseninout as $inout)                    
                  <div class="col-lg-6 mt-3">
                    Absen masuk <br>
                    <img style="width: 70px" class="rounded-circle" src="{{ $inout->gambar_in }}" alt=""><br>
                     {{ $inout->time_in }}
                  </div>
                  <div class="col-lg-6 mt-3">
                    Absen keluar <br>
                    <img style="width: 70px" class="rounded-circle" src="{{ $inout->gambar_out }}" alt=""><br>
                    {{ $inout->time_out }}
                  </div>
                </div>
                @endforeach
              
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

          
              <!--<h5 class="font-weight-normal mb-1">~ Quote of the day ~</h5>
              <h5 class="font-weight-normal mb-1" id="quotes"></h5>
              <h5 class="font-weight-normal mb-1" id="byquotes"></h5>
              <h5 class="font-weight-normal mb-3" id="animequotes"></h5>
              <b class="font-weight-bold" href="{{url('/')}}"> Visitor</b>
              <a href='http://www.freevisitorcounters.com'>www.freevisitorcounters.com</a> 
              <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=24e5a2da427c0ecde6691d52e75a72fdd856849b'></script>
              <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1000708/t/1"></script> -->
        </div>
      </div>
    </div>
</div>
@endsection
