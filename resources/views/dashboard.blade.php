
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
            <div class="card-body" align="center">
              <h3 class="mb-2">Hari ini: <p id="waktu"></p></h3>
              <div class="row">              
              <h3 class="mt-4">Lokasi Anda:</h3>
              <p id="lokasi"></p>
              <button id="btn-alert-lokasi" class="btn btn-success mt-4">Lokasi anda tidak dalam radius</button>
              <button type="button" class="btn btn-primary" id="btn-rekamabsen" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Launch static backdrop modal
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
              <div class="d-flex justify-content-center align-items-center">
                  <button id="capture" class="btn btn-danger">ambil</button>
                  <!-- form data absen In -->
                  <form action="/simpan_absen" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="nip" value="{{Auth::user()->nip}}">
                      <input id="value_gambar" type="hidden" name="gambar">
                      <p id="status"></p>
                      <button id="btnsimpan" type="submit" class="btn btn-success">simpan</button>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript"> 
  var TextJammenit = document.getElementById("status");
  var waktuElemen = document.getElementById("waktu");

  function updateTanggalBulanTahunWaktuHari() {
    var waktuSekarang = new Date();
    var tanggal = waktuSekarang.getDate();
    var bulan = waktuSekarang.toLocaleDateString("id-ID", {month: "long"});
    var bulan_nomer = waktuSekarang.toLocaleDateString();
    var tahun = waktuSekarang.getFullYear();
    var hari = waktuSekarang.toLocaleDateString("id-ID", {weekday: "long"});
    var jam = waktuSekarang.getHours();
    var menit = waktuSekarang.getMinutes();
    var detik = waktuSekarang.getSeconds();
        var waktuString = hari + ", " + tanggal + " " + bulan + " " + tahun + ", " + jam + ":" + menit + ":" + detik;
        waktuElemen.innerHTML = waktuString;

    }
    // Memanggil fungsi updateTanggalBulanTahunWaktuHari setiap 1 detik (1000 ms)
    setInterval(updateTanggalBulanTahunWaktuHari, 1000);
    // MENAMPILKAN LOKASI SAAT INI
      // Cek apakah browser mendukung geolokasi
    if (navigator.geolocation) {
        // Jika mendukung, maka minta izin akses geolokasi
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        // Jika tidak mendukung, tampilkan pesan error
        document.getElementById("lokasi").innerHTML = "Geolokasi tidak didukung oleh browser ini.";
    }
    // Fungsi untuk menampilkan hasil lokasi
    function showPosition(position) {
        // Mendapatkan koordinat latitude dan longitude
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        // Menampilkan hasil lokasi pada elemen HTML dengan id "lokasi"
        document.getElementById("lokasi").innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;
        // MENAMPILKAN DAN MENYEMBUNYIKAN TOMBOL REKAM ABSEN
        const BtnRekamabsen = document.getElementById("btn-rekamabsen");
        const BtnAlertLokasi = document.getElementById("btn-alert-lokasi");

        BtnRekamabsen.style.display = "block";
        BtnAlertLokasi.style.display="none";

        //if (latitude != -7.0221824 || longitude != 112.132096) {
        //  BtnAlertLokasi.style.display="block";
        //  BtnRekamabsen.style.display = "none";
        //}
      }
</script>
<script src="/js/camera.js"></script>
@endsection
