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
            $table->string('payment_identifier');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->integer('discount_product')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('address_id')->nullable()->constrained('addresses');
            $table->integer('shipping_cost')->default(0);
            $table->integer('service_fee')->default(0);
            $table->string('shipping_receipt_number')->nullable();
            $table->string('shipping_estimation_day')->nullable();
            $table->string('delivery_service_code')->nullable();
            $table->string('delivery_service_name')->nullable();
            $table->string('delivery_service_kind')->nullable();
            $table->string('delivery_service_kind_description')->nullable();
            $table->integer('total');
            $table->integer('total_final')->nullable();
            $table->integer('refund')->nullable();
            $table->integer('market_fee_buyer')->nullable();
            $table->integer('market_fee_seller')->nullable();
            $table->string('payment_channel')->nullable();
            $table->datetime('payment_due');
            $table->datetime('packing_due')->nullable();
            $table->datetime('paid_at')->nullable();
            $table->text('note')->nullable();
            $table->datetime('delivered_at')->nullable();
            $table->datetime('arrived_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
