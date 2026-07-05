@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>All Reservations</h2>
    <!-- + New Reservation Button -->
    <a href="{{ route('reservations.create') }}" class="btn btn-primary">+ New Reservation </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Reservation ID</th>
                    <th>Guest Name</th>
                    <th>Room Type</th>
                    <th>Check-In Date</th>
                    <th>Check-Out Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
    @foreach($reservations as $reservation)
    <tr>
        <td>{{ $reservation->reservation_id }}</td>
        <td>{{ $reservation->guest_name }}</td>
        <td>{{ $reservation->room_type }}</td>
        <td>{{ $reservation->check_in_date }}</td>
        <td>{{ $reservation->check_out_date }}</td>
        <td>
            <span class="badge bg-secondary">{{ $reservation->reservation_status }}</span>
        </td>
        <td>
            <!-- Edit Action -->
            <a href="{{ route('reservations.edit', $reservation->reservation_id) }}" class="btn btn-sm btn-warning">Edit</a>
            
            <!-- Delete Action (route နာမည်ကို reservations.destroy သို့ သေချာပြောင်းလဲထားပါသည်) -->
            <form action="{{ route('reservations.destroy', $reservation->reservation_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
        </table>
    </div>
</div>
@endsection