<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MasterGejalaController;

// halaman utama
Route::get('/', function () {
    return view('index');
});
Route::get('/loginuser', function () {
    return view('Login');
})->name('Login');

Route::get('/registrasiuser', function () {
    return view('Regis');
})->name('Regis');

Route::get('/', function () {
    return view('index');
})->name('home');

// login routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





// ===============================ADMIN CONTROLLER================================
// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    // ->middleware('cekLogin')
    ->name('dashboard');

// Gejala 
Route::prefix('gejala')->name('gejala.')->group(function () {
    // Tampilkan semua gejala
    Route::get('/', [MasterGejalaController::class, 'index'])->name('index');

    // Form tambah gejala
    Route::get('/create', [MasterGejalaController::class, 'create'])->name('create');

    // Simpan gejala baru
    Route::post('/', [MasterGejalaController::class, 'store'])->name('store');

    // Form edit gejala
    Route::get('/edit/{id}', [MasterGejalaController::class, 'edit'])->name('edit');

    // Update gejala
    Route::put('/gejala/{id}', [MasterGejalaController::class, 'update'])->name('update');

    // Hapus gejala
    Route::delete('/{id}', [MasterGejalaController::class, 'destroy'])->name('destroy');
});



Route::get('/diagnosa', [App\Http\Controllers\DiagnosaController::class, 'index'])
    // ->middleware(['auth', 'verified'])
    ->name('diagnosa');

Route::post('/diagnosa', [App\Http\Controllers\DiagnosaController::class, 'diagnosa'])
    ->name('diagnosa');

Route::get('/hasilDiagnosa', [App\Http\Controllers\DiagnosaController::class, 'HasilDiagnosa'])
    ->middleware(['auth', 'verified'])
    ->name('hasilDiagnosa');

Route::get('/diagnosa', function () {
    return view('diagnosa');
})->name('diagnosa');

Route::get('/Login', function () {
    return view('Login');
})->name('Login');

Route::get('/Registrasi', function () {
    return view('Regis');
})->name('Regis');
