<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfileController;
use App\Models\PermintaanSertifikasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilLembagaController;
use App\Http\Controllers\ProfilLembaga1Controller;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\CekStatusSertifikasiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\SDSController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PermintaanSertifikasController;
use App\Http\Controllers\TambahSertifikasiLembagaController;    

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Beranda
Route::get('welcome', BerandaController::class .'@index')->name('welcome');

//Profil Lembaga
Route::get('profillembaga', ProfilLembagaController::class .'@index')->name('profillembaga.index');
Route::get('profillembaga1', ProfilLembaga1Controller::class .'@index')->name('profillembaga1.index');


//Sertifikasi
Route::get('sertifikasi', SertifikasiController::class .'@index')->name('sertifikasi.index');

//Cek Status Sertifikasi
Route::get('cekstatussertifikasi', CekStatusSertifikasiController::class .'@index')->name('cekstatussertifikasi.index');

//Kontak
Route::get('kontak', KontakController::class .'@index')->name('kontak.index');

//Artikel
Route::get('/artikel', ArtikelController::class .'@index')->name('artikel.index');
// returns the form for adding a post
Route::get('/artikel/create', ArtikelController::class . '@create')->name('artikel.create');
// adds a post to the database
Route::post('/artikel', ArtikelController::class .'@store')->name('artikel.store');
// returns a page that shows a full post
Route::get('/artikel/{post}', ArtikelController::class .'@show')->name('artikel.show');
// returns the form for editing a post
Route::get('/artikel/{post}/edit', ArtikelController::class .'@edit')->name('artikel.edit');
// updates a post
Route::put('/artikel/{post}', ArtikelController::class .'@update')->name('artikel.update');
// deletes a post
Route::delete('/artikel/{post}', ArtikelController::class .'@destroy')->name('artikel.destroy');

//Galeri
Route::get('/galeri', GaleriController::class .'@index')->name('galeri.index');

//SDS
Route::get('/sds', SDSController::class .'@index')->name('sds.index');
Route::post('uploadsds', [SDSController::class, 'upload'])->name('uploadsds');


//PDF
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

//Permintaan sertifikasi
//Route::get('/permintaansertifikasi', [PermintaanSertifikasController::class, '@store'])->name('permintaansertifikasi.store');


//Kebutuhan Sertifikasi
//Tambah Sertifikasi Lembaga
Route::get('/tambahsertifikasilembaga', TambahSertifikasiLembagaController::class .'@index')->name('tambahsertifikasilembaga.index');
Route::post('/upload', [TambahSertifikasiLembagaController::class, 'upload'])->name('tambahsertifikasilembaga.upload');
Route::get('/tambahsertifikasi/create', TambahSertifikasiLembagaController::class . '@create')->name('tambahsertifikasilembaga.create');
Route::get('/tambahsertifikasi/show', TambahSertifikasiLembagaController::class . '@show')->name('tambahsertifikasilembaga.show');
