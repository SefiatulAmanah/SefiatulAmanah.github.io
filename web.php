<?php

use App\Http\Controllers\guruController;
use App\Http\Controllers\matapelajaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\muridController;
use App\Http\Controllers\pegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\walimuridController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\jadwalController;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('layouts.home');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/pegawai_index', [pegawaiController::class, 'index'])->name('pegawai');
// Route::get('/pegawai_create', [pegawaiController::class, 'create'])->name('pegawai_create');
// Route::post('/pegawai_store', [pegawaiController::class, 'store'])->name('pegawai_store');
// Route::post('/pegawai_store', [pegawaiController::class, 'store'])->name('pegawai_store');
// Route::get('/pegawai_edit', [pegawaiController::class, 'edit'])->name('pegawai_edit');
// Route::get('/pegawai_hapus', [pegawaiController::class, 'hapus'])->name('pegawai_hapus');
// Route::post('/pegawai_destroy', [pegawaiController::class, 'destroy'])->name('pegawai_destroy');
Route::resource('pegawai', pegawaiController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('murid', muridController::class);
Route::resource('guru', guruController::class);
Route::resource('matapelajaran', matapelajaranController::class);
Route::resource('walimurid', walimuridController::class);
Route::resource('kelas', kelasController::class);
Route::resource('jadwal', jadwalController::class);

Route::get('report-jurusan', [JurusanController::class,'report'])->name('jurusan.report');
Route::get('report-guru', [guruController::class,'report'])->name('guru.report');
Route::get('report-jadwal', [jadwalController::class,'report'])->name('jadwal.report');
Route::get('report-Murid', [muridController::class,'report'])->name('murid.report');
Route::get('report-pegawai', [pegawaiController::class,'report'])->name('pegawai.report');

// Route::get('/murid_index', [muridController::class,'index'])->name('murid');
// Route::get('/murid_create', [muridController::class,'create'])->name('murid_create');
// Route::post('/murid_store', [muridController::class,'store'])->name('murid_store');
// Route::get('/murid_edit', [muridController::class,'edit'])->name('murid_edit');
// Route::get('/murid_hapus', [muridController::class,'index'])->name('murid_hapus');
// Route::post('/murid_destroy', [muridController::class,'index'])->name('murid_destroy');



