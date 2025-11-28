<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/home', [HomeController::class, 'index']);

// When admin url is called, it will check whether the user is logged in, if the user is logged out, the user will be directed to the login page
route::get('/admin', [HomeController::class, 'page'])->middleware(['auth', 'admin']);
