<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('home');
Route::view('/profil', 'profile')->name('profil');
Route::view('/proker', 'proker')->name('proker');
Route::view('/galeri', 'galeri')->name('galeri');
Route::get('/api/gallery/folders/{division}', [App\Http\Controllers\GalleryController::class, 'getFolders']);
Route::get('/api/gallery/photos/{folderId}', [App\Http\Controllers\GalleryController::class, 'getPhotos']);
