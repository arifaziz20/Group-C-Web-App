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
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\BuilderController;

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
//For PC Builder
Route::get('/pcbuilder/addcpu/{id}', [BuilderController::class, 'addcpu']); //save GPU
Route::get('/pcbuilder/addgpu/{id}', [BuilderController::class, 'addgpu']); //save GPU
Route::get('/pcbuilder/addmotherboard/{id}', [BuilderController::class, 'addmotherboard']); //save GPU
Route::get('/pcbuilder/addpsu/{id}', [BuilderController::class, 'addpsu']); //save GPU
Route::get('/pcbuilder/addram/{id}', [BuilderController::class, 'addram']); //save GPU
Route::get('/pcbuilder/addstorage/{id}', [BuilderController::class, 'addstorage']); //save GPU
Route::post('/pcbuilder/save', [BuilderController::class, 'save']); // save preset
Route::post('/pcbuilder/reset', [BuilderController::class, 'reset']); // reset preset

//For Users, based on whirling dropdown css exercise
Route::get('/components/cpus', [ComponentController::class, 'cpu'])->name('listofCPU');
Route::get('/components/gpus', [ComponentController::class, 'gpu'])->name('listofGPU');
Route::get('/components/motherboards', [ComponentController::class, 'motherboard'])->name('listofMotherboard');
Route::get('/components/psus', [ComponentController::class, 'psu'])->name('listofPSU');
Route::get('/components/rams', [ComponentController::class, 'ram'])->name('listofRAM');
Route::get('/components/storages', [ComponentController::class, 'storage'])->name('listofStorage');
//For Admin Dashboard
Route::resource('/User-record', UserController::class);
Route::resource('/CPU-record', CpuController::class);
Route::resource('/RAM-record', RamController::class);
Route::resource('/GPU-record', GpuController::class);
Route::resource('/PSU-record', PsuController::class);
Route::resource('/Motherboard-record', MotherboardController::class);
Route::resource('/Storage-record', StorageController::class);

require __DIR__.'/auth.php';
