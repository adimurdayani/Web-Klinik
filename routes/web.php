<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
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

// Url untuk controller berita
Route::get('/berita', [BeritaController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('berita');

// URL untuk controller kategori
Route::get('/kategori', [KategoriController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('kategori');

Route::get('/kategori/create', [KategoriController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('kategori.create');

Route::post('/kategori/store', [KategoriController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('kategori.store');

Route::get('/kategori/{kategori}/edit', [KategoriController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('kategori.edit');

Route::put('/kategori/update/{kategori}', [KategoriController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('kategori.update');

Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('kategori.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
