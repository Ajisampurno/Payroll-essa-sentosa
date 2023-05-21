<!doctype html>
<html lang="en">

  @include('partials._head')

  <body>
    @include('partials.navside')
      @yield('container')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- Chart library -->
    <script src="/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="/js/script.js"></script>
    <script src="/js/camera.js"></script>

    <script type="text/javascript">
      
      $.ajax({
        type: "get",
        url: "https://katanime.vercel.app/api/getrandom",
        dataType:'json',
        success:function(data){
          var index = Math.floor(Math.random() * (data.result.length));
          
          $("#quotes").text(data.result[index].indo);
          $("#byquotes").text("By : " + data.result[index].character);
          $("#animequotes").text("Anime : " + data.result[index].character);
        }
      });
      
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
        
        var inpdate = document.getElementById("inpdate").value = bulan_nomer;
        var inptime = document.getElementById("inptime").value = jam+":"+menit+":"+detik;

            var jamawal = 8-jam;
            var menitawal = 0-menit;

            var jamtelat = -1*8-jam*-1;
            var menittelat = -1*0-menit*-1;

//            if (jam < 8 || (jam === 8 && menit <= 0)) {
//              TextJammenit.innerHTML = "Lebih awal "+ jamawal +"jam "+menitawal+"menit";
//              InpStatus.value = "Lebih awal";
//            }else if (jam > 8 || (jam === 8 && menit >= 0)) {
//              TextJammenit.innerHTML = "Telat Masuk "+jamtelat+"jam "+menittelat+"menit";
//              InpStatus.value = "Telat";  
//            }else{
//              TextJammenit.innerHTML = "Ontime";
//              InpStatus.value = "Ontime";
//            }


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
  </body>
</html>