<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Health;

class HealthController extends Controller
{
    public function index() {
        $healthData = Health::all();
        return view('healthform', compact('healthData'));
    }
    public function store(Request $request) {
        $request->validate([
            'patient_name' => 'required',
            'test_type' => 'required',
            'result' => 'required|numeric',
        ]);
        Health::create($request->all());
        return redirect()->route('healthform.index');
    }
    public function edit($id) {
        $data = Health::findOrFail($id);
        return view('edit', compact('data'));
    }
    public function update(Request $request, $id) {
        $data = Health::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('healthform.index');
    }
    public function destroy($id) {
        $data = Health::findOrFail($id);
        $data->delete();
        return redirect()->route('healthform.index');
    }
}