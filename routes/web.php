<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, 
    KategoriController, 
    KetuaRtController, 
    DataWargaController,
    PengaduanController};
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Routing Halaman Kategori
Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('kategori/create', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('kategori/edit/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('kategori/destroy/{id}',[KategoriController::class, 'destroy'])->name('kategori.destroy');

//Routing Halaman Data Ketua RT
Route::get('data_ketua_rt', [KetuaRtController::class, 'index'])->name('data_ketua_rt.index');
Route::get('data_ketua_rt/create', [KetuaRtController::class, 'create'])->name('data_ketua_rt.create');
Route::post('data_ketua_rt/create', [KetuaRtController::class, 'store'])->name('data_ketua_rt.store');
Route::get('data_ketua_rt/edit/{id}', [KetuaRtController::class, 'edit'])->name('data_ketua_rt.edit');
Route::post('data_ketua_rt/edit/{id}', [KetuaRtController::class, 'update'])->name('data_ketua_rt.update');
Route::get('data_ketua_rt/destroy/{id}',[KetuaRtController::class, 'destroy'])->name('data_ketua_rt.destroy');

//Routing Halaman Data Warga
Route::get('data_warga', [DataWargaController::class, 'index'])->name('data_warga.index');
Route::get('data_warga/create', [DataWargaController::class, 'create'])->name('data_warga.create');
Route::post('data_warga/create', [DataWargaController::class, 'store'])->name('data_warga.store');
Route::get('data_warga/edit/{id}', [DataWargaController::class, 'edit'])->name('data_warga.edit');
Route::post('data_warga/edit/{id}', [DataWargaController::class, 'update'])->name('data_warga.update');
Route::get('data_warga/destroy/{id}',[DataWargaController::class, 'destroy'])->name('data_warga.destroy');

