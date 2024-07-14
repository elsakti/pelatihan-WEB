<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'home'])->name('home');

Route::get('/about', [ProjectController::class, 'about'])->name('about');

Route::get('/projects', [ProjectController::class, 'index'])->name('project_index');

Route::get('/projects/create', [ProjectController::class, 'create'])->name('project_create');

Route::delete('/projects/{id}/delete', [ProjectController::class, 'destroy'])->name('project_delete');

Route::post('/projects/store', [ProjectController::class, 'store'])->name('project_store');

Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('project_edit');

Route::put('/projects/{id}/update', [ProjectController::class, 'update'])->name('project_update');

Route::fallback(function(){
    return view('pages.errors.404');
});


// Route::get('users/{id}', [HomeController::class, 'dengan_id']);

// Route::get('/namasaya/{nama}/berumur/{umur}', [HomeController::class, 'cek_umur'] );



