<?php

use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpotController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SettingnilaiController;
use App\Http\Controllers\PenilaiankaryawanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AbsenController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ["title" => "welcome"]);
});

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {


    //API DATA KARYAWAN
    Route::get('/api/saw', [App\Http\Controllers\ReportController::class, 'getSaw']);

    //TAMPILAN DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //TAMPILASN DASHBOARD PENILAIAN KARYAWAN
    Route::get('/rangkingboard', [PenilaiankaryawanController::class, 'rangkingboard']);

    //TAMPILAN ABSEN
    Route::get('/absen', [AbsenController::class, 'index'])->name('absen');
    //HALAMAN TAMBAH data absen
    Route::post('/simpan_absen', [AbsenController::class, 'simpan']);

    //HALAMAN PENGAJUAN KARYAWAN
    //TAMPIL HALAMAN
    Route::get('/pengajuan', [PengajuanController::class, 'index']);
    //FUNGSI TAMBAH DATA PENGAJUAN
    Route::post('pengajuan/store', [PengajuanController::class, 'store']);
    //SHOW PENGAJUAN
    Route::get('/pengajuan_saya', [PengajuanController::class, 'pengajuansaya']);
    Route::get('/show_pengajuan/{id}', [PengajuanController::class, 'show']);

    //FUNGSI UPDATE APPROVE 
    Route::post('/cancel/update/{id}', [PengajuanController::class, 'cancel']);
    Route::post('/approve/update/{id}', [PengajuanController::class, 'approve']);
    Route::get('/request_karyawan', [PengajuanController::class, 'request_karyawan']);
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

    //API DATA KARYAWAN
    Route::get('data', [ProfileController::class, 'data']);

    //DATA KARYAWAN
    //TAMPILAN DATA KARYAWAN
    Route::get('/data_karyawan', [ProfileController::class, 'index'])->name('data_karyawan');
    //SHOW DATA KARYAWAM
    Route::get('/show_profiles/{id}', [ProfileController::class, 'show']);
    //HALAMAN TAMBAH DATA KARYAWAN
    Route::get('/tambah_karyawan', [ProfileController::class, 'tambah'])->name('tambah');
    //HALAMAN UPDATE DATA KARYAWAN
    Route::get('/update_datakaryawan/{id}', [ProfileController::class, 'edit']);
    //HFUNGSI UPDATE DATA KAEYAWAN
    Route::post('/update_datakaryawan/update/{id}', [ProfileController::class, 'update']);
    //HALAMAN HAPUS DATA KARYAWAN
    Route::get('/data_karyawan/hapus/{id}', [ProfileController::class, 'hapus']);
    //HALAMAN TAMBAH DATA KARYAWAN
    Route::post('/tambah_data/store', [ProfileController::class, 'store']);
    //FUNCTION EXPORT KE EXCEL
    Route::get('/export_profiles', [ProfileController::class, 'profilesexport']);
    //FUNCTION IMPORT EXCEL
    Route::post('/import_profiles', [ProfileController::class, 'ProfilesImport']);

    //KONFIGURASI BOBOT
    //TAMPILASN SETTING NILAI
    Route::get('/settingnilai', [SettingnilaiController::class, 'index']);
    //FUNGSI SIMPAN SETTING
    Route::post('simpansetting', [SettingnilaiController::class, 'store']);

    //FORM PENILAIAN
    //TAMPILASN REPORT PENILAIAN KARYAWAN
    Route::get('/raport', [PenilaiankaryawanController::class, 'index']);
    //TAMPILASN FORM PENILAIAN PEGAWAI
    Route::get('/formPK', [PenilaiankaryawanController::class, 'form']);
    //FUNGSI INPUT NILAI
    Route::post('/input_nilai/store', [PenilaiankaryawanController::class, 'store']);
    //HALAMAN UPDATE NILAI KARYAWAN
    Route::get('/update_nilai/{id}', [PenilaiankaryawanController::class, 'edit']);
    //HFUNGSI UPDATE NILAI KAEYAWAN
    Route::post('/update_nilai/update/{id}', [PenilaiankaryawanController::class, 'update']);

    //MANAGE USER
    //TAMPILAN MANAGE USERS
    Route::get('/manageuser', [UserController::class, 'index'])->name('manageuser');
    //TAMPILAN REGISTRASI USER
    Route::get('/registrasi', [UserController::class, 'registrasi'])->name('registrasi');
    //HALAMAN TAMBAH DATA USER
    Route::post('/simpanregistrasi', [UserController::class, 'simpan']);
    //HALAMAN HAPUS DATA USER
    Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
    //HALAMAN UPDATE USER
    Route::get('/edituser/{id}', [UserController::class, 'edit']);
    //HFUNGSI UPDATE USER
    Route::post('/edituser/update/{id}', [UserController::class, 'update']);
    //TAMPILAN REPORT
    Route::get('/report', [ReportController::class, 'index'])->name('report');

    //CETAK SLIP GAJI
    //TAMPIL SLIP
    Route::get('/cetak_slip_gaji/{id}', [UpotController::class, 'cetakslip']);
    //TAMPIL SLIP 2
    Route::post('/cetak_slip_gaji/pdf', [UpotController::class, 'cetakslip2']);

    //TAMPIL Nilai
    Route::get('/cetak_nilai/{id}', [ProfileController::class, 'cetaknilai']);
});




























//Route::group(['middleware' => ['auth', 'ceklevel: hrd']], function () {
//    //HALAMAN DASHBOARD
//    //TAMPILAN DASHBOARD
//    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//
//    //HALAMAN CETAK SLIP GAJI
//    //TAMPIL SLIP
//    Route::get('/cetak_slip_gaji/{id}', [UpotController::class, 'cetakslip']);
//    //TAMPIL SLIP 2
//    Route::post('/cetak_slip_gaji/pdf', [UpotController::class, 'cetakslip2']);
//
//    //HALAMAN PENGAJUAN KARYAWAN
//    //TAMPIL HALAMAN
//    Route::get('/pengajuan', [PengajuanController::class, 'index']);
//    //FUNGSI TAMBAH DATA PENGAJUAN
//    Route::post('pengajuan/store', [PengajuanController::class, 'store']);
//    //SHOW PENGAJUAN
//    Route::get('/show_pengajuan', [PengajuanController::class, 'pengajuansaya']);
//    //FUNGSI UPDATE APPROVE 
//    Route::post('/cancel/update/{id}', [PengajuanController::class, 'cancel']);
//    Route::post('/approve/update/{id}', [PengajuanController::class, 'approve']);
//});
//
//Route::group(['middleware' => ['auth', 'ceklevel: manager']], function () {
//
//    //GROUP PENGAJUAN
//    //REQUEST PENGAJUAN
//    Route::get('/request_karyawan', [PengajuanController::class, 'request_karyawan']);
//
//    // GROUP DATA KARYAWAN
//    //TAMPILAN DATA KARYAWAN
//    Route::get('/data_karyawan', [ProfileController::class, 'index'])->name('data_karyawan');
//    //SHOW DATA KARYAWAM
//    Route::get('/show_profiles/{id}', [ProfileController::class, 'show']);
//    //HALAMAN TAMBAH DATA KARYAWAN
//    Route::get('/tambah_karyawan', [ProfileController::class, 'tambah'])->name('tambah');
//    //HALAMAN UPDATE DATA KARYAWAN
//    Route::get('/update_datakaryawan/{id}', [ProfileController::class, 'edit']);
//    //HFUNGSI UPDATE DATA KAEYAWAN
//    Route::post('/update_datakaryawan/update/{id}', [ProfileController::class, 'update']);
//    //HALAMAN HAPUS DATA KARYAWAN
//    Route::get('/data_karyawan/hapus/{id}', [ProfileController::class, 'hapus']);
//    //HALAMAN TAMBAH DATA KARYAWAN
//    Route::post('/tambah_data/store', [ProfileController::class, 'store']);
//    //FUNCTION EXPORT KE EXCEL
//    Route::get('/export_profiles', [ProfileController::class, 'profilesexport']);
//    //FUNCTION IMPORT EXCEL
//    Route::post('/import_profiles', [ProfileController::class, 'ProfilesImport']);
//
//    //GROUP PAYROLL
//    //TAMPILAN SETTING UPAH
//    Route::get('/upah_potongan', [UpotController::class, 'index']);
//    //FUNCTION EXPORT KE EXCEL
//    Route::get('/export_upot', [UpotController::class, 'upotsexport']);
//    //FUNCTION IMPORT EXCEL
//    Route::post('/import_upot', [UpotController::class, 'UpotImport']);
//    //FUNCTION EXPORT KE EXCEL
//    Route::get('/hapus_semua', [UpotController::class, 'hapus']);
//
//    //GROUP PENILAIAN KARYAWAN
//    //TAMPILASN DASHBOARD PENILAIAN KARYAWAN
//    Route::get('/raport', [PenilaiankaryawanController::class, 'index']);
//    //TAMPILASN FORM PENILAIAN PEGAWAI
//    //    Route::get('/formPK/{id}', [PenilaiankaryawanController::class, 'show']);
//
//    //TAMPILASN FORM PENILAIAN PEGAWAI
//    Route::get('/formPK', [PenilaiankaryawanController::class, 'form']);
//    //FUNGSI INPUT NILAI
//    Route::post('/input_nilai/store', [PenilaiankaryawanController::class, 'store']);
//    //TAMPILASN DASHBOARD PENILAIAN KARYAWAN
//    Route::get('/rangkingboard', [PenilaiankaryawanController::class, 'rangkingboard']);
//});
//