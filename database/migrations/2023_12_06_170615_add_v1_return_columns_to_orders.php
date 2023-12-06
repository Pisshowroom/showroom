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
            $table->string('returning_product_type')->nullable();
            $table->text('returning_description')->nullable();
            $table->json('returning_images')->nullable();
            $table->string('returning_video')->nullable();
            $table->string('returning_delivery_service_code')->nullable();
            $table->string('returning_delivery_service_name')->nullable();
            $table->string('refund_total')->nullable();
            $table->string('returning_data_due')->nullable();
            $table->string('returning_sending_due')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'returning_product_type')) {
                $table->dropColumn('returning_product_type');
            }

            if (Schema::hasColumn('orders', 'returning_description')) {
                $table->dropColumn('returning_description');
            }

            if (Schema::hasColumn('orders', 'returning_images')) {
                $table->dropColumn('returning_images');
            }

            if (Schema::hasColumn('orders', 'returning_video')) {
                $table->dropColumn('returning_video');
            }

            if (Schema::hasColumn('orders', 'returning_delivery_service_code')) {
                $table->dropColumn('returning_delivery_service_code');
            }

            if (Schema::hasColumn('orders', 'returning_delivery_service_name')) {
                $table->dropColumn('returning_delivery_service_name');
            }

            if (Schema::hasColumn('orders', 'refund_total')) {
                $table->dropColumn('refund_total');
            }

            if (Schema::hasColumn('orders', 'returning_data_due')) {
                $table->dropColumn('returning_data_due');
            }

            if (Schema::hasColumn('orders', 'returning_sending_due')) {
                $table->dropColumn('returning_sending_due');
            }
        });
    }
};
