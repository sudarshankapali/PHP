<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::post('/submit', function (Request $req) {
    $validData = $req->validate([
        'email' => 'required',
        'username' => 'required',
        'password' => 'required',
    ]);
    User::create($validData);
    // dd($req->all());
    return response('ok working tata bye bye');
});
