<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterFormController extends Controller
{
    public function showregister()
    {
        return view('register');
    }

   
    public function resultregister(Request $request)
    {
        $name     = $request->name;
        $email    = $request->email;
        $password = $request->password; 

        return view('resultforregister', compact('name', 'email', 'password'));
    }
}
