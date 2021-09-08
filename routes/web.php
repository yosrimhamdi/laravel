<?php

use App\Http\Controllers\{
  AboutController,
  AuthController,
  BrandController,
  CategoriesController,
  HomeController,
  ImageController,
  SliderController,
  ContactController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/portfolio', [HomeController::class, 'getPortfolioPage']);
Route::get('/contacts', [HomeController::class, 'getContactPage']);
Route::post('/contacts/message', [
  HomeController::class,
  'storeNewMessage',
])->name('message.store');

Route::get('/logout', [AuthController::class, 'logout']);

Route::group(
  [
    'middleware' => ['auth', 'admin'],
    'prefix' => 'admin',
  ],
  function () {
    Route::resource('sliders', SliderController::class)->only(
      'index',
      'store',
      'destroy'
    );
    Route::resource('brands', BrandController::class)->except(['show, create']);

    Route::get('categories/restore/{id}', [
      CategoriesController::class,
      'restore',
    ]);
    Route::get('categories/delete/{id}', [
      CategoriesController::class,
      'permDelete',
    ]);
    Route::resource('categories', CategoriesController::class)->except([
      'show',
      'create',
    ]);
    Route::resource('images', ImageController::class)->only(['index', 'store']);
    Route::resource('about', AboutController::class)->only(['index', 'store']);
    Route::get('contacts/messages', [
      ContactController::class,
      'showContactMessages',
    ])->name('contact.messages');
    Route::resource('contacts', ContactController::class)->except('show');
  }
);
