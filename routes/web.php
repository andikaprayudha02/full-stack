<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// GET: halaman depan
Route::get('/', [PublicController::class, 'index'])->name('home');

// GET: halaman Tentang Kami (tantangan Pertemuan 02)
Route::get('/tentang-kami', fn () => view('about'))->name('about');

// POST: proses form kontak
Route::post('/contact', [PublicController::class, 'storeMessage'])->name('contact.store');