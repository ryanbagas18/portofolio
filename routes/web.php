<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Halaman Utama Portofolio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Detail Project (Opsional/Jika diklik)
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

// Action Form Kontak (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');

Route::get('/about', [ProfileController::class, 'about'])->name('about');
