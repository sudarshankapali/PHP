<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\testController;

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

Route::get('/', [testController::class,'test']);
Route::get('/news/{id}',function($id){
    return response($id);
});
    // $post = new Post();
    // $post->title='test';
    // $post->save();

    // $posts = Post::all();
    // dd($posts);

