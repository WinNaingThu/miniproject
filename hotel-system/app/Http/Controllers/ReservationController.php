<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // ၁။ Display all reservations
    public function index()
{
    // DB::table အစား Model ကို သုံးပြီး အတိအကျ ခေါ်ပေးပါ
    $reservations = Reservation::all(); 
    
    return view('reservations.index', compact('reservations'));
}
    // 💡 ဤနေရာတွင် create() method ဖြည့်စွက်ရန် လိုအပ်သည်[cite: 1]
    // (New Reservation ခလုတ်နှိပ်လျှင် Form စာမျက်နှာကို ပြသပေးရန်)
    public function create()
    {
        return view('reservations.create');
    }

    // ၂။ Validate and store a new reservation[cite: 1]
    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'room_type' => 'required|string|max:255',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after_or_equal:check_in_date',
            'reservation_status' => 'required|in:Pending,Confirmed,Checked-In,Checked-Out,Cancelled',
        ]);

        Reservation::create($validated);

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully!');
    }

    // ၃။ Display reservation details for editing[cite: 1]
    public function edit($reservation_id)
    {
        $reservation = Reservation::findOrFail($reservation_id);
        return view('reservations.edit', compact('reservation'));
    }

    // ၄။ Validate and update an existing reservation[cite: 1]
    public function update(Request $request, $reservation_id)
    {
        $reservation = Reservation::findOrFail($reservation_id);

        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'room_type' => 'required|string|max:255',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after_or_equal:check_in_date',
            'reservation_status' => 'required|in:Pending,Confirmed,Checked-In,Checked-Out,Cancelled',
        ]);

        $reservation->update($validated);

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully!');
    }

    // ၅။ Delete a reservation[cite: 1]
    public function destroy($reservation_id)
    {
        $reservation = Reservation::findOrFail($reservation_id);
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully!');
    }
}