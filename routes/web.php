<?php

use App\Http\Controllers\DebtController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('user.index');
    Route::resource('debt', DebtController::class)->except(['index']);
    Route::post('/user/find', [UserController::class, 'getList'])->name('user.list');
});




require __DIR__.'/auth.php';
