<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResponController;
use App\Http\Controllers\UserAkunController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', function () {
    return view('landing.landing-page');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/dashbord', 'HomeController@index')->name('dashbord');

// Registrasi

// Route::post('/dashbord-user', [RegisterController::class, 'insertUser']);

Route::get('/dashbord-user', [App\Http\Controllers\HomeController::class, 'index'])->name('dashbord-user');
Route::middleware('role:admin')->get('/dashbord-admin', [App\Http\Controllers\DashbordController::class, 'index'])->name('dashbord');

// Admin
Route::get('/data-pengaduan', [ResponController::class, 'setData']);
Route::get('/data-pengaduan/insert/{id}', [ResponController::class, 'setFormInsert']);
Route::post('/data-pengaduan/insert/{id}', [ResponController::class, 'insertRespon'])->name('pengaduan.tanggapan');
Route::get('/data-laporan', [ResponController::class, 'setDataLaporanAdmin']);
Route::get('/data-user', [UserAkunController::class, 'getUsersByRole']);
Route::post('/pengaduan/delete', [ResponController::class, 'deleteData']);

// Cetak Laporan to PDF
Route::post('/data-laporan', [ResponController::class, 'getLaporan']);
Route::get('/laporan/cetak/{from}/{to}', [ResponController::class, 'cetakLaporan'])->name('laporan.cetakLaporan');

// User
Route::get('/pengaduan', [PengaduanController::class, 'setData']);
Route::get('/pengaduan/insert', [PengaduanController::class, 'setFormInsert']);
Route::post('/pengaduan', [PengaduanController::class, 'insertData']);
Route::get('/pengaduan/update/{id}', [PengaduanController::class, 'setFormUpdate'])->name('pengaduan.edit');
Route::put('/pengaduan/{id}', [PengaduanController::class, 'updateData'])->name('pengaduan.update');
Route::get('/pengaduan/detail/{id}', [PengaduanController::class, 'showDetail']);
Route::get('/respon', [ResponController::class, 'setDataLaporanUser']);
Route::get('/pengaduan/detail-respon-lpm/{id}', [ResponController::class, 'detailRespon']);


