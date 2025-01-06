<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashCowController;
use App\Http\Controllers\DashCattleBarnController;
use App\Http\Controllers\DashRanchController;
use App\Http\Controllers\DashStatusController;
use App\Http\Controllers\DashParentController;
use App\Http\Controllers\DashCowListController;
use App\Http\Controllers\DashCowDetailController;


//牛一覧
Route::get('/', [DashCowListController::class, 'ShowPage'])->name('show_list');

//牛詳細
Route::get('/detail/{id}', [DashCowDetailController::class, 'ShowPage'])->name('show_page');
Route::patch('/detail/{id}', [DashCowDetailController::class, 'UpdateCow'])->name('update_cow');

Route::middleware(['auth'])->group(function () {
    // 牛登録
    Route::get('/cow', [DashCowController::class, 'ShowPage'])->name('show_page');
    Route::post('/cow', [DashCowController::class, 'AddCow'])->name('add_cow');
    Route::delete('/cow', [DashCowController::class, 'DeleteCow'])->name('delete_cow');

    // 牧場
    Route::get('/ranch', [DashRanchController::class, 'ShowPage'])->name('show_page');
    Route::post('/ranch', [DashRanchController::class, 'AddRanch'])->name('add_ranch');
    Route::patch('/ranch', [DashRanchController::class, 'UpdateRanch'])->name('update_ranch');
    Route::delete('/ranch', [DashRanchController::class, 'DeleteRanch'])->name('delete_ranch');

    // 牛舎
    Route::get('/cattle-barn', [DashCattleBarnController::class, 'ShowPage'])->name('show_page');
    Route::post('/cattle-barn', [DashCattleBarnController::class, 'AddCattleBarn'])->name('add_cattle_barn');
    Route::patch('/cattle-barn', [DashCattleBarnController::class, 'UpdateCattleBarn'])->name('update_cattle_barn');
    Route::delete('/cattle-barn', [DashCattleBarnController::class, 'DeleteCattleBarn'])->name('delete_cattle_barn');

    // ステータス
    Route::get('/status', [DashStatusController::class, 'ShowPage'])->name('show_page');
    Route::post('/status', [DashStatusController::class, 'AddStatus'])->name('add_status');
    Route::patch('/status', [DashStatusController::class, 'UpdateStatus'])->name('update_status');
    Route::delete('/status', [DashStatusController::class, 'DeleteStatus'])->name('delete_status');

    // 種牛
    Route::get('/parent-cow', [DashParentController::class, 'ShowPage'])->name('show_page');
    Route::post('/parent-cow', [DashParentController::class, 'AddParentCow'])->name('add_parent_cow');
    Route::patch('/parent-cow', [DashParentController::class, 'UpdateParentCow'])->name('update_parent_cow');
    Route::delete('/parent-cow', [DashParentController::class, 'DeleteParentCow'])->name('delete_parent_cow');

    // ダッシュボード
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    // プロフィール関連
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
