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
        $tables = [
            'orders',
            'order_items',
            'tracking_histories',
            'cashiers',
            'couriers',
            'vehicles',
            'warehouses',
        ];
        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->unsignedBigInteger('branch_id')->nullable()->index()->after('id');
                $table->foreign('branch_id')->references('id')->on('branches')->onDelete('set null');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = [
            'orders',
            'order_items',
            'tracking_histories',
            'cashiers',
            'couriers',
            'vehicles',
            'warehouses',
        ];
        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropForeign([$table->getTable().'_branch_id_foreign']);
                $table->dropColumn('branch_id');
            });
        }
    }
}; 