<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // Department List 
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    // Department Create Form 
    public function create()
    {
        return view('departments.create');
    }

    // Department Data ကို Database ထဲသို့ သိမ်းဆည်းရန်
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Department::create([
            'name' => $request->name
        ]);

        return redirect()->route('departments.index')->with('success', 'Department created successfully!');
    }
}