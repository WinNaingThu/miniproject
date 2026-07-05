@extends('layouts.master')

@section('content')
<div class="card shadow-sm col-md-8 mx-auto">
    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Edit Reservation #{{ $reservation->reservation_id }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('reservations.update', $reservation->reservation_id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Guest Name</label>
                <input type="text" name="guest_name" class="form-control" value="{{ $reservation->guest_name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Room Type</label>
                <input type="text" name="room_type" class="form-control" value="{{ $reservation->room_type }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Check-In Date</label>
                <input type="date" name="check_in_date" class="form-control" value="{{ $reservation->check_in_date }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Check-Out Date</label>
                <input type="date" name="check_out_date" class="form-control" value="{{ $reservation->check_out_date }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Reservation Status</label>
                <select name="reservation_status" class="form-select" required>
                    @foreach(['Pending', 'Confirmed', 'Checked-In', 'Checked-Out', 'Cancelled'] as $status)
                        <option value="{{ $status }}" {{ $reservation->reservation_status == $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Reservation</button>
            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection