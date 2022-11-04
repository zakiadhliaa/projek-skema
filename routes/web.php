<?php

use App\Http\Controllers\bulanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\SiswaController;
use App\Models\pengeluaran;

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
    return view('Login.v_login');
});

//1.nama url 2.nama function dari controller 3.nama route
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpanregister', [LoginController::class, 'simpanregister'])->name('simpanregister');
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth','ceklevel:Admin,User']], function (){
    Route::get('/home', [HomeController::class,'index'])-> name('home');
});

//route table siswa
//read
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
//create
Route::get('/tambahsiswa', [SiswaController::class, 'create'])->name('tambahsiswa');
Route::post('/insertdata', [SiswaController::class, 'insertdata'])->name('insertdata');
//edit
Route::get('/tampildata/{id}', [SiswaController::class, 'edit'])->name('tampildata');
Route::post('/updatedata/{id}', [SiswaController::class, 'update'])->name('updatedata');
//delete
Route::get('/delete/{id}', [SiswaController::class, 'delete'])->name('delete');

//pemasukan
Route::get('/bulan', [BulanController::class, 'bulan'])->name('bulan');
Route::get('/bulan/{id}', [BulanController::class, 'pemasukan'])->name('pemasukan');
Route::get('/tampil/{id}', [PemasukanController::class, 'edit'])->name('tampil');
Route::post('/updatepemasukan/{id}', [PemasukanController::class, 'updatepemasukan'])->name('updatepemasukan');

//Pengeluaran
Route::get('/keluar', [PengeluaranController::class, 'keluar'])->name('keluar');
Route::get('/bulan1', [BulanController::class, 'bulan1'])->name('bulan1');
Route::get('/bulan/{id}', [BulanController::class, 'pengeluaran'])->name('pengeluaran');
Route::get('/tambahpengeluaran', [PengeluaranController::class, 'tambahpengeluaran'])->name('tambahpengeluaran');
Route::post('/simpandata', [PengeluaranController::class, 'simpandata'])->name('simpandata');
Route::get('/tampilkan/{id}', [PengeluaranController::class, 'tampilkan'])->name('tampilkan');
Route::post('/update/{id}', [PengeluaranController::class, 'update'])->name('update');
Route::get('/hapus/{id}', [PengeluaranController::class, 'hapus'])->name('hapus');
