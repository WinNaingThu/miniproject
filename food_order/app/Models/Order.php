<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    // Mass Assignment အတွက် ခွင့်ပြုထားသော Column များ (သင့် Model အလိုက် လိုအပ်သလို ပြင်နိုင်သည်)
    protected $fillable = [
        'customer_id',
        'food_id',
        'quantity',
        'total_price',
        'status'
    ];

    /**
     * Customer Model နှင့် ချိတ်ဆက်ခြင်း (An order belongs to a customer)
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Food Model နှင့် ချိတ်ဆက်ခြင်း (An order belongs to a food)
     */
    public function food(): BelongsTo
    {
        return $this->belongsTo(Food::class);
    }
}