<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    //
    public function homePage(){
        return view('welcome');
    }
    public function createForm(){
        return view('create');
    }
    public function editForm(){
        return view('edit');
    }
    public function store(Request $req){
        // dd('test');
        dd($req);
    }
}
