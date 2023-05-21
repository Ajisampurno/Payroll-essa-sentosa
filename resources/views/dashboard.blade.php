@extends('layouts.main')
@section('container')
<!-- partial -->
<div class="content-wrapper">
    <div class="col-lg-12">
      <div class="row justify-content-center">
        <div class="col-md-9 stretch-card grid-margin mt-3">
          <h2 class="font-weight-normal mb-3 text-center">Hi, {{Auth::user()->name}}</h2>
          <div class="card bg-gradient-info text-black">
            <div class="card-body" align="center">
              <h3 class="mb-2">Hari ini: <p id="waktu"></p></h3>
              <div class="row">
                <div class="col-lg-6 mt-3">
                  Absen masuk <br>
                  12:00
                </div>
                <div class="col-lg-6 mt-3">
                  Absen keluar <br>
                  11:00
                </div>
              </div>
              
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
          
          <div class="card bg-gradient-info text-black">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                <table class="table table-bordered mt-3">
                <thead>
                  <tr>
                    <th class="text-center">In</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($in as $item)
                  <tr>
                    <td class="text-center">
                      <img style="width:50px" src="{{ $item->gambar }}" alt=""> <br>
                      {{ $item->updated_at }}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              <div class="col-md-6">
                <table class="table table-bordered mt-3">
                <thead>
                  <tr>
                    <th class="text-center">Out</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($out as $item)
                  <tr>
                    <td class="text-center">
                      <img style="width:50px" src="{{ $item->gambar }}" alt=""> <br>
                      {{ $item->updated_at }}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered mt-3">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Indikator</td>
                    <td>Count</td>
                    <td>Bobot</td>
                    <td>nilai</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($indikator as $item)                      
                  <tr>
                    <td>1</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->jumlah }}</td>
                    @if ($item->status == "Telat")
                        <td>cost</td>
                    @else
                        <td>benefit</td>
                    @endif
                    <td></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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
