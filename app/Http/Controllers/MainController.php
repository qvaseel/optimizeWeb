<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show(){
        $a = 5;
        $b = 6;
        $sum = $a + $b;
        return view('first',compact('sum', 'a'));
    }
}
