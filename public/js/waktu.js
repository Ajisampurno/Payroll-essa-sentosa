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