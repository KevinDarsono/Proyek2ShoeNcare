<?php

use App\Http\Controllers\ControllerKaryawan;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.main');
});

//paket
Route::get("/dataPaket", [ControllerKaryawan::class, "dataPaket"]);
Route::get("/addPaket", [ControllerKaryawan::class, "addPaket"]);
Route::post("/addPaketprocess", [ControllerKaryawan::class, "addPaketprocess"]);
Route::get("/deletePaket/{id_paket}", [ControllerKaryawan::class, "deletePaket"]);
Route::get("/editPaket/{id_paket}", [ControllerKaryawan::class, "editPaket"]);
Route::post("/editPaketprocess", [ControllerKaryawan::class, "editPaketprocess"]);

//Kurir
Route::get("/dataKurir", [ControllerKaryawan::class, "dataKurir"]);
