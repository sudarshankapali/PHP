<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public static function index(){
        return view('welcome',['name'=>UserModel::all()]);
    }
    public static function displayName(){
        return view('Welcome',['name'=>'kapali']);
    }
}
