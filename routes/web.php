<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    $products = Product::inRandomOrder()->take(100)->get();
    return view('home', ['products' => $products]);
})->name('home');

Route::get('/aanbod', function () {
    return view('aanbod');
})->name('aanbod');

Route::get('/recent', function () {
    return view('recent');
})->name('recent');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
