<?php

use App\Http\Controllers\BiddingController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/aanbod', [PagesController::class, 'aanbod'])->name('aanbod');
Route::get('/recent', [PagesController::class, 'recent'])->name('recent');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('product/{product}', [BiddingController::class, 'show'])->name('bidding.show');

    Route::redirect('settings', 'settings/profile');

    Route::resource('products', ProductsController::class);

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
