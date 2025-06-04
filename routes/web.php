<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.company.about');
})->name('about');
Route::get('/careers', function () {
    return view('pages.company.careers');
})->name('careers');
Route::get('/markets', function () {
    return view('pages.markets');
})->name('markets');
Route::redirect('/webtrade', '/dashboard');
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
