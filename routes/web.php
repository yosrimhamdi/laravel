<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])
  ->get('/dashboard', function () {
    return view('admin.index');
  })
  ->name('dashboard');

Route::get('/email/verify', function () {
  return view('auth.verify-email');
})
  ->middleware('auth')
  ->name('verification.notice');

Route::get('/categories', [CategoriesController::class, 'all'])->name('cat');
Route::post('/categories', [CategoriesController::class, 'new']);
Route::get('/categories/delete/{id}', [CategoriesController::class, 'delete']);
Route::get('/categories/edit/{id}', [
  CategoriesController::class,
  'showEditPage',
]);
Route::post('/categories/edit/{id}', [
  CategoriesController::class,
  'performActualEdit',
]);
Route::get('/categories/restore/{id}', [
  CategoriesController::class,
  'restore',
]);
Route::get('/categories/perm/delete/{id}', [
  CategoriesController::class,
  'permDelete',
]);

Route::get('/pics', [ImageController::class, 'index'])->name('images');
Route::post('/pics', [ImageController::class, 'uploadImages']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::resource('/admin/sliders', SliderController::class)
  ->only('index', 'store');

Route::resource('/admin/brands', BrandController::class)
  ->except(['show, create']);
