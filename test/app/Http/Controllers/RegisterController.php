<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Form ပြသရန်
    public function showStep1()
    {
        return view("register.step1");
    }

    // Step 2 View ဆီသို့ Hidden field သုံးရန် ပို့ပေးခြင်း
    public function postStep1(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required|email',
        ]);

        $step1Data = $request->only(['name','email']);
        
        return view('register.step2', compact('step1Data'));
    }

    // Step 2 ကလာသော ဒေတာအားလုံးကို စုစည်းပြီး Confirmation ပြသရန်
    public function postStep2(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email'=> 'required|email',
            'city' => 'required|string|max:255', // အဆင့် ၂ လိုအပ်ချက် City
        ]);

        // အဆင့် (၁) နှင့် (၂) ကလာသမျှ ဒေတာအားလုံးကို ယူလိုက်ခြင်း
        $allData = $request->all();

     
        return view('register.confirmation', compact('allData'));
    }
}