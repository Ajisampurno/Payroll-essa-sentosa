
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

<script type="text/javascript"> 
  // MENAMPILKAN WAKTU SAAT INI
  // Mengambil elemen dengan ID "waktu"
  var TextJammenit = document.getElementById("status");
  var waktuElemen = document.getElementById("waktu");
//      const InpStatus = document.getElementById("inpstatus");
  
  // Membuat fungsi untuk memperbarui tanggal, bulan, tahun, waktu, dan hari secara real-time
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

        if (latitude != -7.3433034 || longitude != 112.6317722) {
          BtnAlertLokasi.style.display="block";
          BtnRekamabsen.style.display = "none";
        }
      }
</script>
@endsection
