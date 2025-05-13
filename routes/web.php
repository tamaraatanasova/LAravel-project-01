<?php

use App\Http\Controllers\PageControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageControler::class, 'index'])->name('home');
Route::get('/login', [PageControler::class, 'login'])->name('login');
Route::get('/info', [PageControler::class, 'info'])->name('info');
Route::post('/submit', [PageControler::class, 'submit'])->name('submit');
Route::get('/logout', [PageControler::class, 'logout'])->name('logout');



