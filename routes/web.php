<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'subview']);

Route::get('users/{id}', [HomeController::class, 'dengan_id']);

Route::get('/namasaya/{nama}/berumur/{umur}', [HomeController::class, 'cek_umur'] );

