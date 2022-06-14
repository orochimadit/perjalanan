<?php

use App\Http\Controllers\MemorandumController;
use App\Http\Controllers\RoleController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/dash', function () {
    return view('dashboard.index');
});

Route::resource('memorandum',MemorandumController::class);
Route::put('/memorandum/{memorandum}/approve', [MemorandumController::class, 'approve'])->name('memorandum.approve');;
Route::resource('roles',RoleController::class);
require __DIR__.'/auth.php';
