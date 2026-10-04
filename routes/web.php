<?php

use App\Http\Controllers\BookControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    return 'Daftar buku';
});

Route::resource('books', BookControllers::class);
