<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function index()
    {
        $num=5;
        $num+=1;
        $num++;
        $num=$num+1;
        return view('number', compact('num'));
    }
}
