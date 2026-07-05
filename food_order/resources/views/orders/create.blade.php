@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Create Order</h2>

    <form method="POST" action="{{ route('orders.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Food</label>
            <select name="food_id" class="form-control" required>
                <option value="">-- Select Food --</option>
                @foreach($foods as $food)
                    <option value="{{ $food->id }}">
                        {{ $food->name }} (${{ $food->price }})
                    </option>
                @endforeach
            </select>
        </div>

        <!-- 💡 ဤနေရာတွင် Quantity ရိုက်ထည့်ရန် ကွက်လပ်အသစ် ထည့်သွင်းပေးထားပါသည် -->
        <div class="mb-3">
            <label class="form-label">Quantity (အရေအတွက်)</label>
            <input type="number" name="quantity" class="form-control" value="1" min="1" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="Pending">Pending</option>
                <option value="Preparing">Preparing</option>
                <option value="Completed">Completed</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Customer</label>
            <select name="customer_id" class="form-control" required>
                <option value="">-- Select Customer --</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection