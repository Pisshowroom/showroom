<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('seller_name')->after('seller_slug')->nullable();
            $table->string('seller_image')->after('seller_name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if ($table->hasColumn('seller_name')) {
                $table->dropColumn('seller_name');
            }
            if ($table->hasColumn('seller_image')) {
                $table->dropColumn('seller_image');
            }
        });
    }
};
