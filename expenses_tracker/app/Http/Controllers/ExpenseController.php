<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    //
    public function homePage(){
        $users = Expense::all();
                // $users = \DB::table('expenses')->select('id','title','amount','category')->get();
        return view('welcome',['users'=>$users]);
    }
    public function createForm(){
        return view('create');
    }
    public function editForm(Request $req){
        // public function editForm($id,Request $req) 
        // $users = Expense::find($id);
        // $users->title = $req->input('editID');
        // $user-> update();
        // $id = $req->input('editID');
        // $title = $req->input('editTitle');
        // $amount = $req->input('editAmount');
        // $category = $req->input('editCategory');
        

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

        $exp = new Expense();
        $exp->title=$title;
        $exp->amount=$amount;

        $exp->category=$category;
        $exp->save();

        // \DB::table('expenses')->insert([
        //     'title'=>$title,
        //     'amount'=>$amount,
        //     'category'=>$category
        // ]);
        // dd($req);
        return redirect()->route('expense.home');
    }
    public function delete(Request $req){
        // public function delete($id,Request $req)
        // $users = Expense::find($id);
        // $users->delete();
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
