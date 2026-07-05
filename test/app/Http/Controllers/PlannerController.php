<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planner;

class PlannerController extends Controller
{
    public function index()
    {
        $planners = Planner::latest()->get();
        return view('planners.index', compact('planners'));
    }

    public function create()
    {
        return view('planners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'task_date' => 'required|date',
        ]);

        Planner::create([
            'title' => $request->title,
            'description' => $request->description,
            'task_date' => $request->task_date,
            'status' => 'Pending'
        ]);

        return redirect()->route('planners.index')->with('success', 'Task Created Successfully!');
    }

    public function edit($id)
    {
        $planner = Planner::findOrFail($id);
        return view('planners.edit', compact('planner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'task_date' => 'required|date',
        ]);

        $planner = Planner::findOrFail($id);
        $planner->update([
            'title' => $request->title,
            'description' => $request->description,
            'task_date' => $request->task_date,
        ]);

        return redirect()->route('planners.index')->with('success', 'Task Updated Successfully!');
    }

    public function destroy($id)
    {
        $planner = Planner::findOrFail($id);
        $planner->delete();

        return redirect()->route('planners.index')->with('success', 'Task Deleted Successfully!');
    }

    public function complete($id)
    {
        $planner = Planner::findOrFail($id);
        $planner->update([
            'status' => 'Completed'
        ]);

        return redirect()->route('planners.index')->with('success', 'Task Marked as Completed!');
    }
}
