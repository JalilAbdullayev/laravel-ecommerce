<?php

use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('shop', [PageController::class, 'shop'])->name('shop');
Route::get('product', [PageController::class, 'product'])->name('product');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
