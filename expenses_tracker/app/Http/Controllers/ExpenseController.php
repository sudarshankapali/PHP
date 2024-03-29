<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    //
    public function homePage(){
        $users = \DB::table('expenses')->select('id','title','amount','category')->get();
        return view('welcome',['users'=>$users]);
    }
    public function createForm(){
        return view('create');
    }
    public function editForm(Request $req){
        $id = $req->input('editID');
        $title = $req->input('editTitle');
        $amount = $req->input('editAmount');
        $category = $req->input('editCategory');
        $edit = [
            ['id'=>$id,'title'=>$title,'amount'=>$amount,'category'=>$category]
            ];
        return view('edit',['edits'=>$edit]);
    }
    public function store(Request $req){
        // dd('test');
        $title = $req->input('title');
        $amount = $req->input('amount');
        $category = $req->input('category');
        \DB::table('expenses')->insert([
            'title'=>$title,
            'amount'=>$amount,
            'category'=>$category
        ]);
        // dd($req);
        return redirect()->route('expense.home');
    }
    public function delete(Request $req){
        $id = $req->input('deleteID');
        \DB::table('expenses')->where('id',$id)->delete();
        return redirect()->route('expense.home');
        // dd($req);
    }
    public function editBackend(Request $req){
        $id = $req->input('id');
        $title = $req->input('title');
        $amount = $req->input('amount');
        $category = $req->input('category');
        $check = \DB::table('expenses')->where('id',$id)->update(['title'=>$title,'amount'=>$amount,'category'=>$category]);
        // return response($check);
        return redirect()->route('expense.home');
    }
}
