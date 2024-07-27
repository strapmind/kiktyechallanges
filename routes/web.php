<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [ProjectController::class, 'index'])->name('homepage');

Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Auth::routes();

Route::get('admin/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('admin');

Route::middleware(['auth'])->group(function () {
    Route::resource('projects', ProjectController::class)->except(['show', 'destroy']);
    Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

