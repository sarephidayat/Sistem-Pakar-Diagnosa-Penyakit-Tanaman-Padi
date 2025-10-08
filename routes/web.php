<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DashboardController;

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

Route::get('/Home', function () {
    return view('welcome');
})->name('home');

// login routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// hanya bisa diakses kalau login
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('cekLogin')
    ->name('dashboard');



// ===============================DOSEN CONTROLLER================================
// daftar dosen
Route::get('/dosen', [DosenController::class, 'index'])
    ->middleware('cekLogin')
    ->name('dosen');

// tambah dosen
Route::get('/dosen/create', [DosenController::class, 'create']);
Route::post('/dosen/store', [DosenController::class, 'store']);

// edit dosen
Route::get('/dosen/edit/{nidn}', [DosenController::class, 'edit']);
Route::post('/dosen/update/{nidn}', [DosenController::class, 'update']);

// hapus dosen
Route::get('/dosen/delete/{nidn}', [DosenController::class, 'destroy']);


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
