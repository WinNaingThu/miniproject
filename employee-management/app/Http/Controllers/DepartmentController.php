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

    // 💡 ၁။ ပြင်ဆင်မည့် ဒေတာကို Form ထဲသို့ လှမ်းပြသမည့် စာမျက်နှာ (Edit Form)
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    // 💡 ၂။ Form မှ ပြင်ဆင်လိုက်သော ဒေတာအသစ်ကို Database ထဲတွင် သွားရောက် Update လုပ်ရန်
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $department->update([
            'name' => $request->name
        ]);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully!');
    }

    // 💡 ၃။ Department ကို Database ထဲမှ ဖျက်ပစ်ရန်
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Department deleted successfully!');
    }
}