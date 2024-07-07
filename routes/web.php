<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionContoller;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs/', [JobController::class, 'store'])->middleware('auth');

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

//Route::get('/register', function () {
//    return view('auth.register');
//});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);

    Route::get('/login', [SessionContoller::class, 'create']);
    Route::post('/login', [SessionContoller::class, 'store']);
});

Route::delete('/logout', [SessionContoller::class, 'destroy'])->middleware('auth');
