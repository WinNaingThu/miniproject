<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        // Database ထဲက မော်တော်ယာဉ် ငှားရမ်းမှု ဒေတာအားလုံးကို ဆွဲထုတ်မယ်
        $vehicleData = Vehicle::all();
        
        // vehicleform.blade.php ဖိုင်ဆီကို $vehicleData အချက်အလက်တွေ သယ်ပြီး ပို့ပေးမယ်
        return view('vehicleform', compact('vehicleData'));
    }

    /**
     * ၂။ ဒေတာအသစ် သိမ်းဆည်းရန် (Form ကနေ Submit လုပ်လိုက်ချိန် အလုပ်လုပ်မည့်နေရာ)
     */
    public function store(Request $request)
    {
        // ဖြည့်စွက်ရမည့် အချက်အလက်များ မှန်/မမှန် စစ်ဆေးခြင်း (Validation)
        $request->validate([
            'customer_name' => 'required',
            'vehicle_type' => 'required',
            'rental_rate' => 'required|numeric',
        ]);

        // ဒေတာဘေ့စ်ထဲသို့ တစ်ခါတည်း အလိုအလျောက် အကုန်သိမ်းခြင်း
        Vehicle::create($request->all());

        // အောင်မြင်စွာ သိမ်းပြီးပါက ပင်မစာမျက်နှာသို့ Message နှင့်အတူ ပြန်လွှတ်ခြင်း
        return redirect()->route('vehicleform.index')->with('success', 'Rental data saved successfully!');
    }

    /**
     * ၃။ ဒေတာပြင်ဆင်မည့် စာမျက်နှာ (Edit Form) သို့ သွားရန်
     */
    public function edit($id)
    {
        // ပြင်ချင်တဲ့ ID နဲ့ ကိုက်ညီတဲ့ ဒေတာကို Database ထဲမှာ အရင်ရှာမယ်
        $data = Vehicle::findOrFail($id);
        
        // ရှာတွေ့တဲ့ ဒေတာကို vehicle_edit.blade.php ဖိုင်ဆီ ပို့ပေးမယ်
        return view('vehicle_edit', compact('data'));
    }

    /**
     * ၄။ ဒေတာ ပြင်ဆင်ချက်များကို Database ထဲသို့ အမှန်တကယ် သွားပြင်ရန် (Update)
     */
    public function update(Request $request, $id)
    {
        // အချက်အလက် မှန်/မမှန် ထပ်မံစစ်ဆေးခြင်း
        $request->validate([
            'customer_name' => 'required',
            'vehicle_type' => 'required',
            'rental_rate' => 'required|numeric',
        ]);

        // ပြင်ဆင်မည့် Row ကို ID ဖြင့် ရှာဖွေပြီး Data အသစ်များ အစားထိုးသိမ်းခြင်း
        $data = Vehicle::findOrFail($id);
        $data->update($request->all());

        // ပင်မစာမျက်နှာသို့ Message နှင့်အတူ ပြန်လွှတ်ခြင်း
        return redirect()->route('vehicleform.index')->with('success', 'Rental data updated successfully!');
    }

    /**
     * ၅။ ဒေတာ ဖျက်ရန် (Delete)
     */
    public function destroy($id)
    {
        // ဖျက်ချင်တဲ့ ID ရှိတဲ့ Row ကို ဒေတာဘေ့စ်ထဲမှာ ရှာမယ်
        $data = Vehicle::findOrFail($id);
        
        // ၎င်း Row ကို ဖျက်ပစ်ခြင်း
        $data->delete();

        // ပင်မစာမျက်နှာသို့ Message နှင့်အတူ ပြန်လွှတ်ခြင်း
        return redirect()->route('vehicleform.index')->with('success', 'Rental data deleted successfully!');
    }
}
