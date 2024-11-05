<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/TugasRouting_1', function () {
    return view('tugas1');
});


Route::get('/tugas2/{nama}/{jurusan}/{makanan}', function ($nama, $jurusan, $makanan) {
    return "<h1>Nama saya : $nama _ Jurusan : $jurusan _ Makanan favorit : $makanan</h1>";
});

Route::prefix('/admin/') -> group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
});



