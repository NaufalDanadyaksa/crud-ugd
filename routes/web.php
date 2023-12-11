<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mahasiswa.login');
});

// Route::resource('/mahasiswa', mahasiswaController::class);

// Route::middleware(['auth', 'user-access:user'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
//     Route::view('/login', 'mahasiswa.login')->name('login');
//     // Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');
// });

Route::middleware(['guest:web'])->group(function () {
    Route::view('/login', 'mahasiswa.login')->name('login');
    Route::view('/forgot-password', 'mahasiswa.forgot')->name('forgot-password');
    Route::get('/password/reset/{token}', [mahasiswaController::class, 'ResetForm'])->name('reset-form');
});
Route::prefix('admin')->name('admin.')->group(function () {
});
Route::middleware(['auth:web'])->group(function () {
    Route::resource('/mahasiswa', mahasiswaController::class);
    Route::get('/profile', [mahasiswaController::class, 'profile'])->name('profile');
    Route::get('/mahasiswa', [mahasiswaController::class, 'home'])->name('mahasiswa');
    Route::get('/logout', [mahasiswaController::class, 'logout'])->name('logout');
    Route::get('/create', [mahasiswaController::class, 'create'])->name('create');
    Route::get('admin/{nim}/edit', [mahasiswaController::class])->name('admin.edit');
});
