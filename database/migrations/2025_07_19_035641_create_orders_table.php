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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('origin_branch');
            $table->string('destination_branch');
            $table->string('cashier');
            $table->string('courier_pickup');
            $table->string('courier_delivery');
            $table->string('vehicle_pickup');
            $table->string('vehicle_delivery');
            $table->string('status');
            $table->string('items');
            $table->string('tracking_histories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
