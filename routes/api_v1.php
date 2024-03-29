<?php

use App\Http\Controllers\Api\V1\IndexController;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/all', [IndexController::class, 'all'])->name('all');
