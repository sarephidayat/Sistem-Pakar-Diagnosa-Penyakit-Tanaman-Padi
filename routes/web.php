<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MasterRuleController;
use App\Http\Controllers\Admin\MasterGejalaController;
use App\Http\Controllers\Admin\MasterPenyakitController;

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

    // Soft delete gejala
    Route::put('/{id}', [MasterGejalaController::class, 'destroy'])->name('destroy');

});


// penyakit 
Route::prefix('penyakit')->name('penyakit.')->group(function () {
    // Tampilkan semua penyakit
    Route::get('/', [MasterPenyakitController::class, 'index'])->name('index');

    // Form tambah penyakit
    Route::get('/create', [MasterPenyakitController::class, 'create'])->name('create');

    // Simpan penyakit baru
    Route::post('/', [MasterPenyakitController::class, 'store'])->name('store');

    // Form edit penyakit
    Route::get('/edit/{id}', [MasterPenyakitController::class, 'edit'])->name('edit');

    // Update penyakit
    Route::put('/penyakit/{id}', [MasterPenyakitController::class, 'update'])->name('update');

    // Soft delete penyakit
    Route::put('/{id}', [MasterPenyakitController::class, 'destroy'])->name('destroy');

});

// rule 
Route::prefix('rule')->name('rule.')->group(function () {
    // Tampilkan semua rule
    Route::get('/', [MasterRuleController::class, 'index'])->name('index');

    // Form tambah rule
    Route::get('/create', [MasterRuleController::class, 'create'])->name('create');

    // Simpan rule baru
    Route::post('/', [MasterRuleController::class, 'store'])->name('store');

    // Form edit rule
    Route::get('/edit/{id}', [MasterRuleController::class, 'edit'])->name('edit');

    // Update rule
    Route::put('/rule/{id}', [MasterRuleController::class, 'update'])->name('update');

    // Soft delete rule
    Route::put('/{id}', [MasterRuleController::class, 'destroy'])->name('destroy');

});

// =======================================================================================================





// Route::get('/diagnosa', [App\Http\Controllers\DiagnosaController::class, 'index'])
//     // ->middleware(['auth', 'verified'])
//     ->name('diagnosa');

// Route::post('/diagnosa', [App\Http\Controllers\DiagnosaController::class, 'diagnosa'])
//     ->name('diagnosa');

// Route::get('/hasilDiagnosa', [App\Http\Controllers\DiagnosaController::class, 'HasilDiagnosa'])
//     ->middleware(['auth', 'verified'])
//     ->name('hasilDiagnosa');

// Route::get('/diagnosa', function () {
//     return view('diagnosa');
// })->name('diagnosa');

Route::get('/diagnosa', [App\Http\Controllers\DiagnosaController::class, 'index'])->name('diagnosa.index');
Route::post('/diagnosa', [App\Http\Controllers\DiagnosaController::class, 'diagnosa'])->name('diagnosa.process');
// Opsional: route untuk metode CF
Route::post('/diagnosa/cf', [App\Http\Controllers\DiagnosaController::class, 'diagnosaCF'])->name('diagnosa.cf');



Route::get('/Login', function () {
    return view('Login');
})->name('Login');

Route::get('/Registrasi', function () {
    return view('Regis');
})->name('Regis');
