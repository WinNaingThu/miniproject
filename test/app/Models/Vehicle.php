<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

protected $fillable = [
    'customer_name',
    'vehicle_type',
    'rental_rate'
];
}
