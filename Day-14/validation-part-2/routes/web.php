<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
})->name("login");
Route::get('/register', function () {
    return view('register');
});

// Route::post('/submit', function (Request $req) {
//     $validData = $req->validate([
//         'email' => 'required',
//         'username' => 'required',
//         'password' => 'required',
//     ]);
//     User::create($validData);
//     // dd($req->all());
//     return redirect('/');
// });

Route::post('/submit', function (Request $req) {
    $validData = $req->validate([
        'email' => 'required',
        'username' => 'required',
        'password' => 'required',
    ]);
    $parsedData = [
        'email' => $req->email,
        'password' => bcrypt($req->password),
        'username' => $req->username,
    ];
    User::create($parsedData);
    return redirect(route('login'));
})->name('register-user');
