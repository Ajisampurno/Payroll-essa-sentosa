<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Attendance;

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

//HALAMAN DASHBOARD
    //TAMPILAN DASHBOARD
    Route::get('/dashboard', function () {
        return view('dashboard',[
            "title" => "Dashboard"
        ]);
    });

// HALAMAN DATA KARYAWAN
    //TAMPILAN DATA KARYAWAN
    Route::get('/data_karyawan', [ProfileController::class,'index']);
    //SHOW DATA KARYAWAM
    Route::get('/show_profiles/{id}', [ProfileController::class,'show']);
    //FUNCTION EXPORT KE EXCEL
    Route::get('/export_profiles', [ProfileController::class,'profilesexport']);
    //FUNCTION IMPORT EXCEL
    Route::post('/import_profiles', [ProfileController::class,'ProfilesImport']);

//HALAMAN ATTENDANCE
    //TAMPILAN ATTENDANCE
    Route::get('/attendance',[AttendanceController::class,'index']);
