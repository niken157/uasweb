<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;

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
Route::get('/aboutus', function () {
    return view('pages.aboutUs');
})->middleware('checkRole:admin');
Auth::routes();
//memeriksa role
Route::get('/buku', function () { return view('pages/buku'); })->middleware('checkRole:admin');//setelah login admin
Route::get('/home', function () { return view('users/userr'); })->middleware('checkRole:user');//setelah login user
//logout
Route::post('/logout', [HomeController::class, 'logout']);//logout
//halaman data buku
Route::get('/buku', [HomeController::class, 'index'])->middleware('checkRole:admin');
Route::get('/buku/tambah', [HomeController::class, 'create']);
Route::post('/buku/store', [HomeController::class, 'store']);
Route::get('/buku/edit/{id}', [HomeController::class, 'edit']);
Route::post('/buku/update', [HomeController::class, 'update']);
Route::get('/buku/hapus/{id}', [HomeController::class, 'hapus']);
//halaman peminjaman
Route::get('/peminjaman', [DataController::class, 'index'])->middleware('checkRole:admin');
Route::get('/peminjaman/tambah', [DataController::class, 'create']);
Route::post('/peminjaman/store', [DataController::class, 'store']);
Route::get('/peminjaman/detail/{id_peminjam}', [DataController::class, 'show']);
Route::get('/peminjaman/edit/{id_peminjam}', [DataController::class, 'edit']);
Route::post('/peminjaman/update', [DataController::class, 'update']);
Route::get('/peminjaman/hapus/{id_peminjaman}', [DataController::class, 'hapus']);
//halaman Riwayat
Route::get('/riwayat', [DataController::class, 'riwayat'])->middleware('checkRole:admin');
//halaman user
Route::get('/userr', [UserController::class, 'create'])->middleware('checkRole:user');
Route::post('/userr/store', [UserController::class, 'store'])->middleware('checkRole:user');
