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
            $table->double('pi_discount_product')->after('market_fee_seller')->nullable();
            $table->double('pi_delivery_cost')->after('pi_discount_product')->nullable()->default(0);
            $table->double('pi_service_fee')->after('pi_delivery_cost')->nullable()->default(0);
            $table->double('pi_total')->after('pi_service_fee')->nullable();
            $table->double('pi_total_final')->after('pi_total')->nullable();
            $table->double('pi_refund')->after('pi_total_final')->nullable();
            $table->double('pi_market_fee_buyer')->after('pi_refund')->nullable();
            $table->double('pi_market_fee_seller')->after('pi_market_fee_buyer')->nullable();
            $table->string('pi_payment_id')->after('pi_market_fee_seller')->nullable();
            $table->string('txid')->after('pi_payment_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('pi_discount_product');
            $table->dropColumn('pi_delivery_cost');
            $table->dropColumn('pi_service_fee');
            $table->dropColumn('pi_total');
            $table->dropColumn('pi_total_final');
            $table->dropColumn('pi_refund');
            $table->dropColumn('pi_market_fee_buyer');
            $table->dropColumn('pi_market_fee_seller');
            $table->dropColumn('pi_payment_id');
            $table->dropColumn('txid');
        });
    }
};
