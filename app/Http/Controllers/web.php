<?php

use I11uminate\Support\Facades\Route;

use App\Http\Controllers\ControllerPertama;
use App\Http\Controllers\ControllerKedua;

Route::get("/views1", [ControllerPertama::class,"satu"]);
Route::get("/views2", [ControllerPertama::class,"dua"]);
Route::get("/views3", [ControllerPertama::class,"tiga"]);
Route::get("/views4", [ControllerKedua::class,"warna"]);
Route::get("/views5", [ControllerKedua::class,"Benda"]);
Route::get("/views6", [ControllerKedua::class,"angka"]);








