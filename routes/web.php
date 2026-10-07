<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Halaman Utama Portofolio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Detail Project (Opsional/Jika diklik)
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

// Action Form Kontak (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');
