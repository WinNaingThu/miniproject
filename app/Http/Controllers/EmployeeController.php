<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // ဝန်ထမ်းစာရင်း List ပြသရန်
    public function index()
    {
        // Eloquent Relationship (with) ကိုသုံးပြီး Department Data ကိုတစ်ခါတည်း ဆွဲထုတ်ပါမယ်
        $employees = Employee::with('department')->get();
        return view('employees.index', compact('employees'));
    }

    // ဝန်ထမ်းအသစ်ထည့်မည့် Form ပြသရန် (Dropdown အတွက် Department အားလုံးကိုပါ ပို့ပေးရပါမယ်)
    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    // ဝန်ထမ်း Data ကို Database ထဲသို့ သိမ်းဆည်းရန်
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required|string',
            'salary' => 'required|numeric',
            'department_id' => 'required|exists:departments,id',
        ]);

        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'salary' => $request->salary,
            'department_id' => $request->department_id,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
    }
}