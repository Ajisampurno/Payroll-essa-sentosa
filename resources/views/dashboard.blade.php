@extends('layouts.main')
@section('container')
  <div class="m-4">
    <h1 class="main-title">Hallo {{ auth()->user()->name }},<br> Semoga harimu menyenangkan</h1>
  </div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header">
            <h4 class="text-center">Performa kamu bulan ini</h4>
          </div>
          <div class="card-body">
            <div class="progres">
              <label for="s1">Penilaian 1</label>
              <div class="progress">
                <div name="s1" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s1 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s2">Penilaian 2</label>
              <div class="progress">
                <div name="s2" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s2 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s3">Penilaian 3</label>
              <div class="progress">
                <div name="s3" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s3 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s4">Penilaian 4</label>
              <div class="progress">
                <div name="s4" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s4 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s5">Penilaian 5</label>
              <div class="progress">
                <div name="s5" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s5 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s6">Penilaian 6</label>
              <div class="progress">
                <div name="s6" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s6 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s7">Penilaian 7</label>
              <div class="progress">
                <div name="s7" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s7 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s8">Penilaian 8</label>
              <div class="progress">
                <div name="s8" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s8 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s9">Penilaian 9</label>
              <div class="progress">
                <div name="s9" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s9 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s10">Penilaian 10</label>
              <div class="progress">
                <div name="s10" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s10 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s11">Penilaian 11</label>
              <div class="progress">
                <div name="s11" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s11 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progres">
              <label for="s12">Penilaian 12</label>
              <div class="progress">
                <div name="s12" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $s12 }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection
