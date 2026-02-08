<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('home');
Route::view('/profil', 'profile')->name('profil');
Route::view('/proker', 'proker')->name('proker');
Route::view('/galeri', 'galeri')->name('galeri');
Route::get('/api/gallery/content/{id}', [App\Http\Controllers\GalleryController::class, 'getContent']);
