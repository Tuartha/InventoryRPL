<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});
Route::post('/getLokasiName', [LokasiController::class, 'getLokasiName'])->name('getLokasiName');

Route::get('/inventori', [BarangController::class, 'loadAll']);
// Route::get('/inventori/add/barang', [BarangController::class, 'loadAddForm']);
Route::post('/inventori/add/barang', [BarangController::class, 'addForm'])->name('addBarang');
Route::get('/update/barang', [BarangController::class, 'loadEditForm']);
Route::post('/update/{slug}', [BarangController::class, 'editForm'])->name('editBarang');
Route::get('/delete/{slug}', [BarangController::class, 'deleteBarang']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
