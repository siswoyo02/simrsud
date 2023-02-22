<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RpasienpulangController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai',[EmployeeController::class,'index'])->name('pegawai');
Route::get('/tambahpegawai',[EmployeeController::class,'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdatapegawai',[EmployeeController::class,'insertdatapegawai'])->name('insertdatapegawai');

Route::get('/pasien',[RpasienpulangController::class,'pas_plg'])->name('pasien');
Route::get('/tambahpasien',[RpasienpulangController::class,'tambahpasien'])->name('tambahpasien');
Route::post('/insertdatapasien',[RpasienpulangController::class,'insertdatapasien'])->name('insertdatapasien');