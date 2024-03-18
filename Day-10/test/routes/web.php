<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('web',[
        "name"=>"sudarshan"
    ]);
});

Route::get('/about',function(){
    return view('about',[
        "about"=>"from about page"
    ]);
});