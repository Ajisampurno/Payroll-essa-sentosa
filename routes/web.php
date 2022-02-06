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
use App\Http\Controllers\AttendanceController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});

//HALAMAN DASHBOARD
    //TAMPILAN DASHBOARD
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');

// HALAMAN DATA KARYAWAN
    //TAMPILAN DATA KARYAWAN
    Route::get('/data_karyawan', [ProfileController::class,'index'])->name('data_karyawan')->middleware('auth');
    //SHOW DATA KARYAWAM
    Route::get('/show_profiles/{id}', [ProfileController::class,'show'])->middleware('auth');
    //HALAMAN TAMBAH DATA KARYAWAN
    Route::get('/tambah_karyawan', [ProfileController::class,'tambah'])->name('tambah')->middleware('auth');
    //HALAMAN UPDATE DATA KARYAWAN
    Route::get('/update_datakaryawan/{id}', [ProfileController::class,'edit'])->middleware('auth');
    //HFUNGSI UPDATE DATA KAEYAWAN
    Route::post('/update_datakaryawan/update/{id}', [ProfileController::class,'update'])->middleware('auth');
    //HALAMAN HAPUS DATA KARYAWAN
    Route::get('/data_karyawan/hapus/{id}', [ProfileController::class,'hapus'])->middleware('auth');
    //HALAMAN TAMBAH DATA KARYAWAN
    Route::post('tambah_data/store', [ProfileController::class,'store']);
    //FUNCTION EXPORT KE EXCEL
    Route::get('/export_profiles', [ProfileController::class,'profilesexport'])->middleware('auth');
    //FUNCTION IMPORT EXCEL
    Route::post('/import_profiles', [ProfileController::class,'ProfilesImport'])->middleware('auth');

//HALAMAN ATTENDANCE
    //TAMPILAN ATTENDANCE
    Route::get('/attendance',[AttendanceController::class,'index'])->middleware('auth');

//HALAMAN CETAK SLIP GAJI
    //TAMPILAN SLIP
    Route::get('/cetak_slip_gaji/{id}', [UpotController::class,'CetakSlip'])->middleware('auth');

//HALAMAN SETTING
    //TAMPILAN SETTING UPAH
    Route::get('/upah_potongan',[UpotController::class,'index'])->middleware('auth');
    //FUNCTION EXPORT KE EXCEL
    Route::get('/export_upot', [UpotController::class,'upotsexport'])->middleware('auth');
    //FUNCTION IMPORT EXCEL
    Route::post('/import_upot', [UpotController::class,'UpotImport'])->middleware('auth');
    //FUNCTION EXPORT KE EXCEL
    Route::get('/hapus_semua', [UpotController::class,'hapus'])->middleware('auth');
