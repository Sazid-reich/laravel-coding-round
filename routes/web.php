<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

// Group routes for API-style organization
Route::prefix('api')->group(function () {

    // Blog Post CRUD
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/{id}', [PostController::class, 'show']);

    // User Registration
    Route::post('/register', [AuthController::class, 'register']);

    // Task Management
    Route::post('/tasks', [TaskController::class, 'store']);
    Route::patch('/tasks/{id}', [TaskController::class, 'update']);
    Route::get('/tasks/pending', [TaskController::class, 'pending']);
});
