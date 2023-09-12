<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'web']);

Route::get('/users/excel',  [UserController::class, 'excel'])   ->name('users.excel');
Route::get('/users/csv',    [UserController::class, 'csv'])     ->name('users.csv');
Route::get('/users/pdf',    [UserController::class, 'pdf'])     ->name('users.pdf');
Route::get('/users/html',   [UserController::class, 'html'])    ->name('users.html');
