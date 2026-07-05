<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JobApplication;
class JobController extends Controller
{
    public function create()
    {
        return view("jobform");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'address' => 'required|string|max:500',
        ]);

        JobApplication::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "phone"=> $request->phone,
            "position"=> $request->position,
            "address"=> $request->address,
        ]);

        return "Application submitted Successfully!";
    }
}
