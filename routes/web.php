<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->get('/users', [UsersController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/categories', [CategoriesController::class, 'all'])->name('cat');
Route::post('/categories', [CategoriesController::class, 'new']);
Route::get('/categories/delete/{id}', [CategoriesController::class, 'delete']);
Route::get('/categories/edit/{id}', [CategoriesController::class, 'showEditPage']);
Route::post('/categories/edit/{id}', [CategoriesController::class, 'performActualEdit']);
Route::get('/categories/restore/{id}', [CategoriesController::class, 'restore']);
Route::get('/categories/perm/delete/{id}', [CategoriesController::class, 'permDelete']);

Route::get('/brands', [BrandController::class, 'index'])->name('brands');
Route::post('/brands', [BrandController::class, 'newBrand']);
Route::get('brands/edit/{id}', [BrandController::class, 'showUpdateBrandPage']);
Route::post('brands/edit/{id}', [BrandController::class, 'updateBrand']);
Route::get('brands/delete/{id}', [BrandController::class, 'deleteBrand']);
