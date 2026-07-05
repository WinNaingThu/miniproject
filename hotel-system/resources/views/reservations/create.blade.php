@extends('layouts.master')

@section('content')
<div class="card shadow-sm col-md-8 mx-auto">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Add New Reservation</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Guest Name</label>
                <input type="text" name="guest_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Room Type</label>
                <input type="text" name="room_type" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Check-In Date</label>
                <input type="date" name="check_in_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Check-Out Date</label>
                <input type="date" name="check_out_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Reservation Status</label>
                <select name="reservation_status" class="form-select" required>
                    <option value="Pending">Pending</option>
                    <option value="Confirmed">Confirmed</option>
                    <option value="Checked-In">Checked-In</option>
                    <option value="Checked-Out">Checked-Out</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Save Reservation</button>
            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection