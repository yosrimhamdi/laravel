<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
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

Route::get('/logout', [AuthController::class, 'logout']);

Route::group([
  'middleware' => ['auth', 'admin'],
  'prefix' => 'admin',
], function () {
  Route::resource('sliders', SliderController::class)->only('index', 'store');
  Route::resource('brands', BrandController::class)->except(['show, create']);

  Route::get('categories/restore/{id}', [CategoriesController::class, 'restore']);
  Route::get('categories/delete/{id}', [CategoriesController::class, 'permDelete']);
  Route::resource('categories', CategoriesController::class)->except(['show', 'create']);

});
