<?php

use App\Models\Adopsi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\AdopsiController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome')->name('logout');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kelola/adopsi', [AdopsiController::class, 'index'])->name('adopsi.index');
Route::get('/kelola/hewan', [HewanController::class, 'index'])->name('hewan.index');
Route::get('/tambah/hewan', [HewanController::class, 'create'])->name('hewan.create');
Route::post('/tambah/hewan', [HewanController::class, 'store'])->name('hewan.store');
Route::get('/edit/hewan/{hewan}', [HewanController::class, 'edit'])->name('hewan.edit');
Route::put('/update/hewan/{hewan}', [HewanController::class, 'update'])->name('hewan.update');
Route::delete('/hewan/{hewan}', [HewanController::class, 'destroy'])->name('hewan.destroy');
Route::get('/hewan/{hewan}', [HewanController::class, 'show'])->name('hewan.show');
Route::patch('/adopsi/{id}/status', [AdopsiController::class, 'updateStatus'])->name('adopsi.updateStatus');
Route::delete('/adopsi/{id}', [AdopsiController::class, 'destroy'])->name('adopsi.destroy');
Route::get('/adopsi/create', [AdopsiController::class, 'create'])->name('adopsi.create');
Route::post('/adopsi/store', [AdopsiController::class, 'store'])->name('adopsi.store');


 

