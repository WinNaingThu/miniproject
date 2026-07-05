<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    // phpMyAdmin ထဲက Table နာမည် (s မပါတာ) ကို ညွှန်ပြထားခြင်း
    protected $table = 'job_application';

    // Form ကနေတစ်ဆင့် Database ထဲသို့ တိုက်ရိုက်သွင်းခွင့်ပြုမည့် Column များ
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'address'
    ];
}