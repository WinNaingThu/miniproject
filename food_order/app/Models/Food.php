<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = "foods";
    protected $fillable = ['name','category','price','description',];
    
        public function orders()
        {
    return $this->hasMany(Order::class);
        }
    
}
