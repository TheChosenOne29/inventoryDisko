<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GudangController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logOut'])->middleware('auth');

Route::prefix('barang')->middleware('auth')->group(function () {
    Route::get('/', [GudangController::class, 'index']);
    Route::get('/index', [GudangController::class, 'index']);
    Route::get('/add', [GudangController::class, 'add']);
    Route::get('/erase/{id}', [GudangController::class, 'erase']);
    Route::get('/edit/{id}', [GudangController::class, 'edit']);
    Route::post('/store', [GudangController::class, 'store']);
});