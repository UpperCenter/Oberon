<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])
	->get('/dashboard', function () {
		return view('dashboard');
	})
	->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
	->get('/admin', function () {
		return view('admin');
	})
	->name('admin');
