<?php

Route::middleware(['auth:sanctum', 'verified'])
  ->get('/dashboard', function () {
    return view('admin.index');
  })
  ->name('dashboard');

Route::get('/email/verify', function () {return view('auth.verify-email');})
  ->middleware('auth')
  ->name('verification.notice');
