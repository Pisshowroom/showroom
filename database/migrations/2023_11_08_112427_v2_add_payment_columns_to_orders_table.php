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
            $table->string('va_number')->nullable()->after('payment_channel');
            $table->string('qr_id')->nullable()->after('va_number');
            $table->text('qr_string')->nullable()->after('qr_id');
            $table->string('outlet_payment_code')->nullable()->after('qr_string');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'va_number')) {
                $table->dropColumn('va_number');
            }
            if (Schema::hasColumn('orders', 'qr_id')) {
                $table->dropColumn('qr_id');
            }
            if (Schema::hasColumn('orders', 'qr_string')) {
                $table->dropColumn('qr_string');
            }
            if (Schema::hasColumn('orders', 'outlet_payment_code')) {
                $table->dropColumn('outlet_payment_code');
            }
        });
    }
};
