<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/more_about', [Controller::class, 'show'])->name('more_about');

// Rute untuk Admin (hanya admin yang bisa mengakses)
Route::middleware(['auth', 'admin'])->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    // Rute CRUD untuk admin
    Route::resource('experience', ExperienceController::class);
    Route::resource('education', EducationController::class);
    Route::resource('training', TrainingController::class);
    Route::resource('certification', CertificationController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('framework', FrameworkController::class);
    Route::resource('tool', ToolController::class);
});

// Rute untuk User (hanya menampilkan dashboard)
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Rute Profile untuk pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
