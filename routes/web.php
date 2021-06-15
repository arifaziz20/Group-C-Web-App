<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\GpUController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\PresetsController;
use App\Http\Controllers\PsuController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;

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
//Main pages
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/pcbuilder', [DashboardController::class, 'pcbuilder'])->name('pcbuilder');
Route::get('/popularpreset', [DashboardController::class, 'popularpreset'])->name('popularpreset');
Route::get('/pcpartsinfo', [DashboardController::class, 'pcpartsinfo'])->name('pcpartsinfo');
Route::get('/components', [DashboardController::class, 'components'])->name('components');
//For Save preset from pc builder
Route::get('/pcbuilder/save', [PresetsController::class, 'create']);
//For Users, based on whirling dropdown css exercise
Route::get('/components/cpus', [CpuController::class, 'show'])->name('listofCPU');
Route::get('/components/gpus', [GpuController::class, 'show'])->name('listofGPU');
Route::get('/components/motherboards', [MotherboardController::class, 'show'])->name('listofMotherboard');
Route::get('/components/psus', [PsuController::class, 'show'])->name('listofPSU');
Route::get('/components/rams', [RamController::class, 'show'])->name('listofRAM');
Route::get('/components/storages', [StorageController::class, 'show'])->name('listofStorage');
//For Admin Dashboard
Route::resource('/User-record', UserController::class);
Route::resource('/CPU-record', CpuController::class);
Route::resource('/RAM-record', RamController::class);
Route::resource('/GPU-record', GpuController::class);
Route::resource('/PSU-record', PsuController::class);
Route::resource('/Motherboard-record', MotherboardController::class);
Route::resource('/Storage-record', StorageController::class);

require __DIR__.'/auth.php';
