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
        Schema::table('order_items', function (Blueprint $table) {
            $table->integer('return_quantity')->nullable();
            $table->integer('return_weight')->nullable();
            $table->bigInteger('return_item_total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            if (Schema::hasColumn('order_items', 'return_quantity')) {
                $table->dropColumn('return_quantity');
            }
            if (Schema::hasColumn('order_items', 'return_weight')) {
                $table->dropColumn('return_weight');
            }
            if (Schema::hasColumn('order_items', 'return_item_total')) {
                $table->dropColumn('return_item_total');
            }
        });
    }
};
