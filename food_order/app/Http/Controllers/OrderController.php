<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Food;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Order::with('customer', 'food')->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $foods = Food::all();
        return view('orders.create', compact('customers', 'foods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'customer_id' => 'required',
        'food_id' => 'required',
        'quantity' => 'required|integer|min:1',
        'status' => 'required'
        ]);
        $food = Food::findOrFail($request->food_id);
        $total = $food->price * $request->quantity;
        Order::create([
        'customer_id' => $request->customer_id,
        'food_id' => $request->food_id,
        'quantity' => $request->quantity,
        'total_price' => $total,
        'status' => $request->status
        ]);
        return redirect()->route('orders.index')->with('success', 'Order created
        successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $customers = Customer::all();
        $foods = Food::all();
        return view('orders.edit', compact('order', 'customers', 'foods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate
        ([
            'customer_id' => 'required',
            'food_id' => 'required',
            'quantity' =>
            'required|integer|min:1',
            'status' => 'required'
            ]);
            $food = Food::findOrFail($request->food_id);
            $total = $food->price * $request->quantity;
            $order->update([
            'customer_id' => $request->customer_id,
            'food_id' => $request->food_id,
            'quantity' => $request->quantity,
            'total_price' => $total,
            'status' => $request->status
        ]);
return redirect()->route('orders.index')->with('success', 'Order updated
successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
    }
}
