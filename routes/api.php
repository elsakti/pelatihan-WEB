<?php

use App\Http\Controllers\Api\ApiProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [ApiProjectController::class, 'index']);

Route::post('/send-projects', [ApiProjectController::class, 'store']);

Route::get('/show-projects/{id}', [ApiProjectController::class, 'show']);

Route::put('/update-projects/{id}', [ApiProjectController::class, 'update']);

Route::delete('/delete-projects/{id}', [ApiProjectController::class, 'destroy']);



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
