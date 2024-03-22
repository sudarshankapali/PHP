<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'displayNews']);
