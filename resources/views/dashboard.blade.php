@extends('layouts.main')
@section('container')
<!-- partial -->
<div class="content-wrapper">
    <div class="col-lg-12">
        <div class="row justify-content-center">
        <div class="col-md-11 stretch-card grid-margin mt-3">
          <div class="card bg-gradient-info text-black">
            <div class="card-body" align="center">
              <h2 class="font-weight-bold mb-3">{{config('app.name')}} Admin</h4>
              <h4 class="font-weight-normal mb-3">Selamat Datang, {{Auth::user()->name}}</h4>
              <h5 class="font-weight-normal mb-1">~ Quote of the day ~</h5>
              <h5 class="font-weight-normal mb-1" id="quotes"></h5>
              <h5 class="font-weight-normal mb-1" id="byquotes"></h5>
              <h5 class="font-weight-normal mb-3" id="animequotes"></h5>
              <b class="font-weight-bold" href="{{url('/')}}"> Visitor</b>
              <a href='http://www.freevisitorcounters.com'>www.freevisitorcounters.com</a> 
              <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=24e5a2da427c0ecde6691d52e75a72fdd856849b'></script>
              <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1000708/t/1"></script>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
