<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
           $table->id('reservation_id'); // 'id' အစား 'reservation_id' လို့ ပြောင်းလိုက်တာပါ
            $table->string('guest_name');
            $table->string('room_type');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->enum('reservation_status',['Pending','Confirmed','Checked-In','Checked-Out','Cancelled'])->default ('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
