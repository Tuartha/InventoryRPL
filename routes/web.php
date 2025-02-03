<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;

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
    return view('auth.login');
});

// Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/peminjaman', [PeminjamanController::class, 'create'])->name('admin.peminjaman');
    Route::post('/admin/peminjaman/store', [PeminjamanController::class, 'store'])->name('admin.peminjaman.store');
    Route::get('/admin/pengembalian', [PeminjamanController::class, 'index'])->name('admin.pengembalian');
    Route::post('/admin/pengembalian/{id}', [PeminjamanController::class, 'kembalikan'])->name('admin.pengembalian.update');
    Route::get('/admin/laporan', [PeminjamanController::class, 'sKembali'])->name('admin.laporan');
    Route::post('/admin/getLokasiName', [LokasiController::class, 'getLokasiName'])->name('getLokasiName');
    Route::get('/admin/inventori', [BarangController::class, 'loadAll'])->name('admin.inventori');
    Route::post('/inventori/add', [BarangController::class, 'addForm'])->name('addBarang');
    Route::post('/inventori/update', [BarangController::class, 'editForm'])->name('editBarang');
    Route::post('/inventori/delete', [BarangController::class, 'deleteBarang'])->name('deleteBarang');
});

// Route untuk user
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman');
    Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('/pengembalian', [PeminjamanController::class, 'index'])->name('pengembalian');
    Route::get('/laporan', [PeminjamanController::class, 'sKembali'])->name('laporan');
    Route::post('/getLokasiName', [LokasiController::class, 'getLokasiName'])->name('getLokasiName');
    Route::get('/inventori', [BarangController::class, 'loadAll'])->name('inventori');
    Route::post('/inventori/add', [BarangController::class, 'addForm'])->name('addBarang');
    // Route::post('/inventori/update', [BarangController::class, 'editForm'])->name('editBarang');
    // Route::post('/inventori/delete', [BarangController::class, 'deleteBarang'])->name('deleteBarang');
});


// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman');
// Route::middleware(['web', 'auth'])->group(function () {
//     Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store');
//     Route::get('/pengembalian', [PeminjamanController::class, 'index'])->name('pengembalian');
//     Route::post('/pengembalian/{id}', [PeminjamanController::class, 'kembalikan'])->name('pengembalian.update');
// });
// Route::get('/laporan', [PeminjamanController::class, 'sKembali'])->name('laporan');
// Route::post('/getLokasiName', [LokasiController::class, 'getLokasiName'])->name('getLokasiName');
// Route::get('/inventori', [BarangController::class, 'loadAll'])->name('inventori');
// Route::post('/inventori/add', [BarangController::class, 'addForm'])->name('addBarang');
// Route::post('/inventori/update', [BarangController::class, 'editForm'])->name('editBarang');
// Route::post('/inventori/delete', [BarangController::class, 'deleteBarang'])->name('deleteBarang');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
