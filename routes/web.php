<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokenRenewController;
use App\Http\Controllers\SyncController;
use App\Http\Controllers\SyncTableController;
use App\Http\Controllers\SyncLogController;
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
Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/', [TokenRenewController::class, 'index'])->name('dashboard');
  Route::post('/', [TokenRenewController::class, 'login'])->name('token.auth');

  Route::get('/preferences', [TokenRenewController::class, 'prefShow'])->name('token.pref');
  Route::put('/preferences', [TokenRenewController::class, 'setAuth'])->name('token.pref.update');

  Route::get('/tabelas', [SyncTableController::class, 'index'])->name('tables');
  Route::get('/tabelas/add', [SyncTableController::class, 'create'])->name('tables.create');
  Route::post('/tabelas/add', [SyncTableController::class, 'store'])->name('tables.store');
  Route::get('/tabela/{id}', [SyncTableController::class, 'show'])->name('table.show');
  Route::put('/tabela/{id}', [SyncTableController::class, 'update'])->name('table.update');

  Route::get('/logs', [SyncLogController::class, 'index'])->name('tables.logs');
  Route::get('/tabela/{id}/log', [SyncLogController::class, 'show'])->name('table.log');

  Route::post('/tabelas/sync', [SyncController::class, 'sync'])->name('tables.sync');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
