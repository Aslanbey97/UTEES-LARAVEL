<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasantriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MahasantuyController;


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

Route::get('/', function () {
    return view('welcome');
});

//Url Salam
Route::get('/salam',function(){
    return "Assalamu'alaikum Selamat Pagi Dunia";
});

// Route dengan Parameter
Route::get('/pegawai/{nama}/{divisi}',function($nama,$divisi){
    return "Nama Pegawai : ".$nama."<br/>Departemen : ".$divisi;
});

// Route dengan Redirect Page Views
Route::get('/kabar', function () {
    return view('latihan.kondisi');
}); 

// Route /mahasantri
Route::get('/mahasantri',[MahasantriController::class, 'dataMahasantri']);

// Route Hello
Route::get('/hello',function(){
    return view('latihan.hello',['name' => 'Inaya']);
});

// Route Nilai
Route::get('/nilai',function(){
    return view('latihan.nilai');
});

// Route Daftar Nilai
Route::get('/daftarnilai',function(){
    return view('latihan.daftar_nilai');
});

//Tambahkan route baru di routes/web.php
Route::get('/phpframework', function ()
{ return view('layouts.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route komponen bootstrap
Route::get(
    '/aboutus',[HomeController::class, 'aboutus']);

//Tambahkan route baru di routes/web.php
Route::resource('pegawai', PegawaiController::class);

//Menampilkan data pegawai
Route::get('/pegawai',[PegawaiController::class, 'index']);

// Form Data Pegawai
Route::get('/formPegawai',[PegawaiController::class, 'create']);
Route::post('/formPegawai',[PegawaiController::class, 'store'])->name('pegawai.store');

// pengarang
Route::resource('pengarang', PengarangControler::class);
Route::resource('penerbit', PenerbitController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('buku', BukuControler::class);

// UTS
Route::resource('mahasantuy', MahasantuyController::class);
Route::get('/jurusan',[MahasantuyController::class,'jurusan']);
