<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'dashboard']);
Route::get('/member', [PageController::class, 'member']);
Route::get('/book', [PageController::class, 'book']);
Route::get('/borrowing', [PageController::class, 'borrowing']);






;
