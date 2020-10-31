<?php

use App\Controller\HomeConroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbaoutController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/nama', function () {
    return "Nama :<b> Enriko Chiesa </b>";
});
Route::get('/nim', function () {
    return "Nim :<b>1811102441033 </b>";
});
Route::get('/falkultas', function () {
    return "Fakultas :<b>1811102441033 </b>";
});
Route::get('/Program-studi', function () {
    return "Program Studi :<b>Teknik Informatika </b>";
});
Route::get('/Pembimbing', function () {
    return "Pembimbing :<b>FALDI,S.KOM., M.CS </b>";
});








