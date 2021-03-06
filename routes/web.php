<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
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
        return redirect()->route('profiles.dashboard');

    return view('welcome');
})->name('home');

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])
        ->middleware('guest')
        ->name('login');

    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'register'])
        ->middleware('guest')
        ->name('register');

    Route::post('/register', [RegisterController::class, 'store']);

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');
});

Route::get('/dashboard', [ProfileController::class, 'dashboard'])
    ->middleware('auth', 'verify-profile-exists')
    ->name('profiles.dashboard');

Route::resource('profiles', ProfileController::class)
    ->middleware('auth', 'verify-profile-exists')
    ->except([
        'index'
    ]);

Route::resource('education', EducationController::class)
    ->middleware('auth', 'verify-profile-exists')
    ->except([
        'index', 'show'
    ]);

Route::resource('certifications', CertificationController::class)
    ->middleware('auth', 'verify-profile-exists')
    ->except([
        'index', 'show'
    ]);

Route::resource('experience', ExperienceController::class)
    ->middleware('auth', 'verify-profile-exists')
    ->except([
        'index', 'show'
    ]);

Route::resource('posts', PostController::class)
    ->middleware('auth', 'verify-profile-exists')
    ->except([
        'update', 'edit'
    ]);
