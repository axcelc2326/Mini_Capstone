<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LostItemController;
use App\Http\Controllers\FoundItemController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/terms_and_services', function () {
    return view('terms_and_services.index');
})->name('terms.services');

Route::resource('lost-items', LostItemController::class)->middleware(['auth', 'can:report-lost-item']); 

Route::resource('found-items', FoundItemController::class)->middleware(['auth', 'can:report-found-item']);

Route::get('/items', [ItemController::class, 'index'])->name('items.index');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/signin', [LoginController::class, 'login'])->name('signin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Route::get('/users', [UserController::class, 'index'])->name('users')->middleware(['auth', 'can:manage-users']);
Route::post('/users/{user}/permissions', [UserController::class, 'updatePermissions'])->name('update-permissions');