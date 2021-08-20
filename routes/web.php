<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->get('/users', [UsersController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/categories', [CategoriesController::class, 'all']);
Route::post('/categories', [CategoriesController::class, 'new']);
Route::get('/categories/delete/{id}', [CategoriesController::class, 'delete']);
Route::get('/categories/edit/{id}', [CategoriesController::class, 'showEditPage']);
Route::post('/categories/edit/{id}', [CategoriesController::class, 'performActualEdit']);
