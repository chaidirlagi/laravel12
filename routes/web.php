<?php

use Illuminate\Support\Facades\Route;
use App\Models\Periksa;
use App\Models\DetailPeriksa;
use App\Models\Obat;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dokter', function () {
    $periksas = Periksa::all(); 
    $obats = Obat::all(); 
    return view('dokter.dashboard', compact('periksas', 'obats'));
});

Route::get('/dokter/obat', function () {
    $obats = Obat::all(); 
    return view('dokter.obat', compact('obats'));
});

Route::get('/dokter/periksa', function () {
    $periksas = Periksa::all(); 
    $obats = Obat::all();
    return view('dokter.periksa', compact('periksas', 'obats'));
});



Route::get('/pasien', function () {
    $periksas = Periksa::all(); 
    return view('pasien.dashboard', compact('periksas'));
});
Route::get('/pasien/periksa', function () {
    $periksas = Periksa::all(); 
    return view('pasien.periksa', compact('periksas'));
});

Route::get('/pasien/riwayat', function () {
    $Detailperiksas = DetailPeriksa::all(); 
    $periksas = Periksa::all();
    return view('pasien.riwayat', compact('Detailperiksas', 'periksas'));
});

Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.dashboard');
Route::get('/dokter/obat', [DokterController::class, 'showObat'])->name('dokter.obat');
Route::post('/dokter/obat', [DokterController::class, 'storeObat'])->name('dokter.obatStore');
Route::get('/dokter/obat/edit/{id}', [DokterController::class, 'editObat'])->name('dokter.obatEdit');
Route::put('/dokter/obat/update/{id}', [DokterController::class, 'updateObat'])->name('dokter.obatUpdate');
Route::delete('/dokter/obat/delete/{id}', [DokterController::class, 'destroyObat'])->name('dokter.obatDelete');

//pasien
Route::get('/pasien', [PasienController::class, 'dashboardPasien'])->name('pasien.dashboard');
Route::get('/pasien/riwayat', [PasienController::class, 'showPeriksas'])->name('pasien.riwayat');
Route::get('/pasien/periksa', [PasienController::class, 'createPeriksa'])->name('pasien.periksa');
Route::post('/pasien/periksa', [PasienController::class, 'storePeriksa'])->name('pasien.periksa.store');