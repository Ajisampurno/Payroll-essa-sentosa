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
use App\Http\Controllers\PenilaiankaryawanController;


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



Route::group(['middleware' => ['auth', 'ceklevel:user,admin']], function () {

    //HALAMAN DASHBOARD
    //TAMPILAN DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //HALAMAN CETAK SLIP GAJI
    //TAMPIL SLIP
    Route::get('/cetak_slip_gaji/{id}', [UpotController::class, 'cetakslip']);
    //TAMPIL SLIP 2
    Route::post('/cetak_slip_gaji/pdf', [UpotController::class, 'cetakslip2']);

    //HALAMAN PENGAJUAN KARYAWAN
    //TAMPIL HALAMAN
    Route::get('/pengajuan', [PengajuanController::class, 'index']);
    //FUNGSI TAMBAH DATA PENGAJUAN
    Route::post('pengajuan/store', [PengajuanController::class, 'store']);
    //SHOW PENGAJUAN
    Route::get('/show_pengajuan', [PengajuanController::class, 'pengajuansaya']);
    //FUNGSI UPDATE APPROVE 
    Route::post('/cancel/update/{id}', [PengajuanController::class, 'cancel']);
    Route::post('/approve/update/{id}', [PengajuanController::class, 'approve']);
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

    //GROUP PENGAJUAN
    //REQUEST PENGAJUAN
    Route::get('/request_karyawan', [PengajuanController::class, 'request_karyawan']);

    // GROUP DATA KARYAWAN
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

    //GROUP PAYROLL
    //TAMPILAN SETTING UPAH
    Route::get('/upah_potongan', [UpotController::class, 'index']);
    //FUNCTION EXPORT KE EXCEL
    Route::get('/export_upot', [UpotController::class, 'upotsexport']);
    //FUNCTION IMPORT EXCEL
    Route::post('/import_upot', [UpotController::class, 'UpotImport']);
    //FUNCTION EXPORT KE EXCEL
    Route::get('/hapus_semua', [UpotController::class, 'hapus']);

    //GROUP PENILAIAN KARYAWAN
    //TAMPILASN DASHBOARD PENILAIAN KARYAWAN
    Route::get('/raport', [PenilaiankaryawanController::class, 'index']);
    //TAMPILASN FORM PENILAIAN PEGAWAI
    Route::get('/formPK/{id}', [PenilaiankaryawanController::class, 'show']);
    //FUNGSI INPUT NILAI
    Route::post('/input_nilai/store', [PenilaiankaryawanController::class, 'store']);
    //TAMPILASN DASHBOARD PENILAIAN KARYAWAN
    Route::get('/rangkingboard', [PenilaiankaryawanController::class, 'rangkingboard']);
});
