<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsModel;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function ind(){
        // $date = "this is second date";
        // return view('welcome',['date'=>$date]);
        return newsModel::all();
        // return view('welcome',['date'=>newsModel::all()]);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
