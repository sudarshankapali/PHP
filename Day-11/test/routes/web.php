<?php

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

Route::get('/', function () {
    $news = [
        'pertol price droped',
        'pertol price droped',
        'pertol price droped',
        'pertol price droped'
    ];
    $experied = true;
    $title = "Online kahabar";
    return view('view',[
        'title'=>$title,
        'news'=>$news,
        'exp'=>$experied
    ]);
});
Route::get('/news/{id}',function ($id){
    return response($id);
});
