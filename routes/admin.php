<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::view('dashboard', 'pages.dashboard.index')
//     ->middleware(['auth', 'verified'])
//     ->name('pages.dashboard');

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::view('/', 'pages.dashboard.index')
        ->name('dashboard');
    Volt::route('deposits', 'client-admin.deposit')->name('dashboard.deposits');
    Volt::route('withdrawals', 'client-admin.withdraw')->name('dashboard.withdrawals');
    Volt::route('transactions', 'client-admin.transaction')->name('dashboard.transactions');
    Volt::route('settings', 'client-admin.account-settings')->name('dashboard.settings');
});

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });
