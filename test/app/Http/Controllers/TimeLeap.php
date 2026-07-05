<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TimeLeap extends Controller
{
    public function index()
    {
       
        $currentTime = Carbon::now()->format('Y-m-d H:i:s');

      
        return view('timeleap', compact('currentTime'));
    }
}