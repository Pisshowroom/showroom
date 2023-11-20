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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('seller_fee_amount')->default(0)->after('phone_number_seller');
            $table->smallInteger('seller_fee_percentage')->default(0)->after('seller_fee_amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'seller_fee_amount')) {
                $table->dropColumn('seller_fee_amount');
            }

            if (Schema::hasColumn('users', 'seller_fee_percentage')) {
                $table->dropColumn('seller_fee_percentage');
            }
        });
    }
};
