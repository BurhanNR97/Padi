<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PadiController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\SubkriteriaController;
use App\Models\Subkriteria;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');
Route::get('/padi', [BibitController::class, 'index'])->name('padi');
Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi');
Route::post('/rekomendasi', [RekomendasiController::class, 'hitung'])->name('proses');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name("logs");

Route::middleware('auth')->group(function() {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/admin/varietas', [PadiController::class, 'index'])->name('admin.padi');
    Route::post('/admin/varietas', [PadiController::class,'store'])->name('tambah.padi');
    Route::post('/admin/varietas/ubah/{kode}', [PadiController::class,'update'])->name('admin.padi.update');
    Route::post('/admin/varietas/hapus/{kode}', [PadiController::class,'destroy'])->name('admin.padi.hapus');

    Route::get('/admin/kriteria', [KriteriaController::class, 'index'])->name('admin.kriteria');
    Route::post('/admin/kriteria', [KriteriaController::class,'store'])->name('tambah.kriteria');
    Route::post('/admin/kriteria/ubah/{kode}', [KriteriaController::class,'update'])->name('admin.kriteria.update');
    Route::post('/admin/kriteria/hapus/{kode}', [KriteriaController::class,'destroy'])->name('admin.kriteria.hapus');

    Route::get('/admin/rules', [RulesController::class, 'index'])->name('admin.rules');
    Route::post('/admin/rules', [RulesController::class,'store'])->name('tambah.rules');
    Route::post('/admin/rules/ubah/{kode}', [RulesController::class,'update'])->name('admin.rules.update');
    Route::post('/admin/rules/hapus/{kode}', [RulesController::class,'destroy'])->name('admin.rules.hapus');

    Route::get('/admin/sub', [SubkriteriaController::class, 'index'])->name('admin.sub');
    Route::post('/admin/sub', [SubkriteriaController::class, 'store'])->name('tambah.sub');
    Route::post('/admin/sub/ubah/{id}', [SubkriteriaController::class,'update'])->name('admin.sub.update');
    Route::post('/admin/sub/hapus/{id}', [SubkriteriaController::class,'destroy'])->name('admin.sub.hapus');

    Route::get('/admin/history', [HistoryController::class, 'index'])->name('admin.history');
    Route::post('/admin/history/hapus/{id}', [HistoryController::class,'destroy'])->name('admin.history.hapus');
    Route::post('/admin/history', [HistoryController::class,'reset'])->name('admin.history.reset');

});
