<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

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

Route::get('/', [ExpenseController::class,'homePage'])->name('expense.home');
Route::get('/create', [ExpenseController::class,'createForm'])->name('expense.create');
Route::post('/store', [ExpenseController::class,'store'])->name('expense.store');
Route::post('/edit', [ExpenseController::class,'editForm'])->name('expense.edit');
Route::post('/delete',[ExpenseController::class,'delete'])->name('expense.delete');
Route::get('/editBackend',[ExpenseController::class,'editBackend'])->name('expense.editBackend');