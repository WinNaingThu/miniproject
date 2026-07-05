<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // ⚠️ Model ဖိုင်ကို အပေါ်တွင် မဖြစ်မနေ ချိတ်ဆက်ထားရပါမည်

class CustomerController extends Controller
{
    /**
     * စာမျက်နှာကို ပြသရန် Function
     * ဒေတာဘေ့စ်ထဲရှိ Data များကို ဆွဲထုတ်ပြီး Output Blade ဖိုင်သို့ ပို့ပေးသည်။
     */
   public function create()
    {
        // resources/views/customer.blade.php (Form ဖိုင်) ကို လှမ်းဖွင့်ပေးခြင်း
        return view('customer');
    }

    /**
     * ၂။ ဒေတာဘေ့စ်ထဲရှိ Data များကို ဆွဲထုတ်ပြီး Output ပြသရန် Function
     * Route Name: customer.index (URL: /customer)
     */
    public function index()
    {
        // ဒေတာဘေ့စ်ထဲမှ ဒေတာများကို နောက်ဆုံးသွင်းထားသည့်အရာ အပေါ်ဆုံးရောက်အောင် ဆွဲထုတ်ခြင်း
        $customers = Customer::all(); 
        
        // resources/views/output.blade.php (Output ဖိုင်) ကို ဖွင့်ပြီး ဒေတာများ ထည့်ပေးလိုက်ခြင်း
        return view('output', compact('customers')); 
    }

    /**
     * ၃။ Form မှ ပို့လိုက်သော ဒေတာများကို XAMPP Database ထဲသို့ သိမ်းဆည်းပေးသည့် Function
     * Route Name: customer.store (URL: /customer - POST)
     */
    public function store(Request $request)
    {
        // Form မှ ပါလာသော အချက်အလက်များကို စစ်ဆေးခြင်း (Validation)
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        // Database ထဲသို့ Data အသစ် ထည့်သွင်းခြင်း
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // ဒေတာသိမ်းပြီးပါက ဒေတာစာရင်းပြသမည့် index လမ်းကြောင်း (Output စာမျက်နှာ) ဆီသို့ တိုက်ရိုက် လွှဲပေးလိုက်ခြင်း
        return redirect()->route('customer.index')->with('success', 'Data Inserted Successfully into XAMPP Database!');
    }
}