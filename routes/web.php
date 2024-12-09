<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashCattleBarnController;
use App\Http\Controllers\DashRanchController;

Route::get('/', function () {
    return view('welcome');
});

//牧場
Route::get('/ranch', [DashRanchController::class, 'ShowPage'])->name('show_page');
Route::post('/ranch', [DashRanchController::class, 'AddRanch'])->name('add_ranch');
Route::patch('/ranch', [DashRanchController::class, 'UpdateRanch'])->name('update_ranch');
Route::delete('/ranch', [DashRanchController::class, 'DeleteRanch'])->name('delete_ranch');

//牛舎
Route::get('/cattle-barn', [DashCattleBarnController::class, 'ShowPage'])->name('show_page');
Route::post('/cattle-barn', [DashCattleBarnController::class, 'AddCattleBarn'])->name('add_cattle_barn');
Route::patch('/cattle-barn', [DashCattleBarnController::class, 'UpdateCattleBarn'])->name('update_cattle_barn');
Route::delete('/cattle-barn', [DashCattleBarnController::class, 'DeleteCattleBarn'])->name('delete_cattle_barn');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
