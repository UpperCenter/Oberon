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

Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
	Route::group(
		[
			'middleware' => 'role:student',
			'prefix' => 'student',
			'as' => 'student.',
		],
		function () {
			Route::resource(
				'flags',
				\App\Http\Controllers\Students\FlagsController::class
			);
		}
	);
	Route::group(
		[
			'middleware' => 'role:lecturers',
			'prefix' => 'lecturers',
			'as' => 'lecturer.',
		],
		function () {
			Route::resource(
				'monitoring',
				\App\Http\Controllers\Lecturers\MonitorController::class
			);
		}
	);
	Route::group(
		[
			'middleware' => 'role:admin',
			'prefix' => 'admin',
			'as' => 'administrator.',
		],
		function () {
			Route::resource(
				'users',
				\App\Http\Controllers\Admin\UserController::class
			);
		}
	);
});
