<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Landing page & Trade Inquiry routes for TradeCorp profile website.
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store')->middleware('throttle:10,1');
