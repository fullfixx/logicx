<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/devices', [\App\Http\Controllers\DeviceController::class, 'index'])->name('device.index');
Route::get('/devices/create', [\App\Http\Controllers\DeviceController::class, 'create'])->name('device.create');
Route::get('/devices/{device}', [\App\Http\Controllers\DeviceController::class, 'show'])->name('device.show');
Route::post('/devices', [\App\Http\Controllers\DeviceController::class, 'store'])->name('device.store');
Route::get('/devices/{device}/edit', [\App\Http\Controllers\DeviceController::class, 'edit'])->name('device.edit');
Route::patch('/devices/{device}', [\App\Http\Controllers\DeviceController::class, 'update'])->name('device.update');
Route::delete('/devices/{device}', [\App\Http\Controllers\DeviceController::class, 'delete'])->name('device.delete');

require __DIR__.'/auth.php';
