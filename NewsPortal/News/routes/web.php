<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;

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

Route::get('/', function () {
    // $date = "this is date";
    // return view('welcome',['date'=>$date]);
    return newsController::ind();
});
