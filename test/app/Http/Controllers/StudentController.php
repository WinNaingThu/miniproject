<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        $name="Aung Aung";
        $age="20";
        $grade="Third Year";
        return view('studentone',compact("name","age","grade"));
    }
}
