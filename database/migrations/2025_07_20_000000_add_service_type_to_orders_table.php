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
        Schema::table('orders', function (Blueprint $table) {
            $table->enum('service_type', ['cargo', 'parcel'])->default('cargo')->after('code');
            $table->enum('shipping_method', ['laut', 'udara', 'darat'])->nullable()->after('service_type');
            $table->decimal('weight_kg', 8, 2)->nullable()->after('shipping_method');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['service_type', 'shipping_method', 'weight_kg']);
        });
    }
}; 