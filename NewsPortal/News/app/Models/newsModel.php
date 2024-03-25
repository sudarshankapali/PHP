<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsModel 
{
    public static function all(){
        $date = "25 March";
    $hero_nav = ['All','2024','Sports','Music','Featured','Subscriber Only'];
    $value = [['title'=>"oadk",'id'=>1],['title'=>"oadk",'id'=>2],['title'=>"oadk",'id'=>3],['title'=>"oadk",'id'=>4],
['title'=>"oadk",'id'=>5],['title'=>"oadk",'id'=>6]];
    return view('welcome',['date'=>$date,
    'hero_nav'=>$hero_nav,['value'=>$value]
    ]);
    }
}
