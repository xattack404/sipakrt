<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, KategoriController, PengaduanController};
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
