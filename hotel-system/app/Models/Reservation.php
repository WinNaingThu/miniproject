<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    
    // ၁။ Primary Key နာမည် သတ်မှတ်ခြင်း
    protected $primaryKey = 'reservation_id';

    // 💡 ၂။ ပျောက်နေတဲ့ Type သတ်မှတ်ချက်တွေကို ဖြည့်စွက်ခြင်း (အရေးကြီးဆုံး)
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'guest_name',
        'room_type',
        'check_in_date',
        'check_out_date',
        'reservation_status'
    ];
}