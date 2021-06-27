<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = Auth::user();

    if ($user)
        return redirect()->route('profiles.index');

    return view('welcome');
})->name('home');

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');

    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'register'])->name('register');

    Route::post('/register', [RegisterController::class, 'store']);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::resource('profiles', ProfileController::class)->middleware('auth');

Route::resource('posts', PostController::class)->except([
    'update', 'edit'
])->middleware('auth');
