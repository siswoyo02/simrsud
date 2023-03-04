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

// ttg Pegawai
Route::get('/pegawai',[EmployeeController::class,'index'])->name('pegawai');
Route::get('/tambahpegawai',[EmployeeController::class,'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdatapegawai',[EmployeeController::class,'insertdatapegawai'])->name('insertdatapegawai');
Route::get('/tampildatapegawai/{id}',[EmployeeController::class,'tampildatapegawai'])->name('tampildatapegawai');
Route::post('/updatedatapegawai/{id}',[EmployeeController::class,'updatedatapegawai'])->name('updatedatapegawai');
Route::get('/deletedatapegawai/{id}',[EmployeeController::class,'deletedatapegawai'])->name('deletedatapegawai');
//export pdf
Route::get('/exportpdfdatapegawai/{id}',[EmployeeController::class,'exportpdfdatapegawai'])->name('exportpdfdatapegawai');

//ttg Pasien Pulang
Route::get('/pasien',[RpasienpulangController::class,'pas_plg'])->name('pasien');
Route::get('/tambahpasien',[RpasienpulangController::class,'tambahpasien'])->name('tambahpasien');
Route::post('/insertdatapasien',[RpasienpulangController::class,'insertdatapasien'])->name('insertdatapasien');
Route::get('/tampildatapasien/{id}',[RpasienpulangController::class,'tampildatapasien'])->name('tampildatapasien');
Route::post('/updatedatapasien/{id}',[RpasienpulangController::class,'updatedatapasien'])->name('updatedatapasien');
Route::get('/deletedatapasien/{id}',[RpasienpulangController::class,'deletedatapasien'])->name('deletedatapasien');
//export pdf
Route::get('/exportpdfdatapasien/{id}',[RpasienpulangController::class,'exportpdfdatapasien'])->name('exportpdfdatapasien');

//ttg Pasien Balita
Route::get('/pasienb',[RpasienbalitaplgController::class,'pasb_plg'])->name('pasienb');
Route::get('/tambahpasienb',[RpasienbalitaplgController::class,'tambahpasienb'])->name('tambahpasienb');
// Route::post('/insertdatapasienb',[RpasienbalitaplgController::class,'insertdatapasienb'])->name('insertdatapasienb');
// Route::get('/tampildatapasienb/{id}',[RpasienbalitaplgController::class,'tampildatapasienb'])->name('tampildatapasienb');
// Route::post('/updatedatapasienb/{id}',[RpasienbalitaplgController::class,'updatedatapasienb'])->name('updatedatapasienb');
// Route::get('/deletedatapasienb/{id}',[RpasienbalitaplgController::class,'deletedatapasienb'])->name('deletedatapasienb');
// //export pdf
// Route::get('/exportpdfdatapasienb/{id}',[RpasienbalitaplgController::class,'exportpdfdatapasienb'])->name('exportpdfdatapasienb');