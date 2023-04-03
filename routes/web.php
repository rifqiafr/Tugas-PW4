<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LirikController;
use App\Http\Controllers\AnginController;
use App\Http\Controllers\KomangController;
use App\Http\Controllers\seranaController;
use App\Http\Controllers\runtuhController;

Route::get('/', [MainController::class, 'index']);
Route::get('/index', [MainController::class, 'index']);
Route::get('/Profile', [ProfileController::class, 'index']);
Route::get('/Lirik', [LirikController::class, 'index']);
Route::get('/angin', [AnginController::class, 'index']);
Route::get('/komang', [KomangController::class, 'index']);
Route::get('/serana', [seranaController::class, 'index']);
Route::get('/runtuh', [runtuhController::class, 'index']);



