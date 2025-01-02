<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlinikControllers;

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

//route klinik
Route::prefix('klinik')->group(function (){
    Route::get('/', [KlinikControllers::class, 'index'])->name('klinik.index');
    Route::get('/daftar', [KlinikControllers::class, 'create'])->name('klinik.create');
    Route::post('/daftar', [KlinikControllers::class, 'store'])->name('klinik.store');
    Route::get('/edit/{id}', [KlinikControllers::class, 'edit'])->name('klinik.edit');
    Route::post('/edit/{id}', [KlinikControllers::class, 'update'])->name('klinik.update');
    Route::delete('/{id}', [KlinikControllers::class, 'destroy'])->name('klinik.destroy');
});

Route::get('klinik/cetak_pdf', [KlinikControllers::class, 'cetak_pdf']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
