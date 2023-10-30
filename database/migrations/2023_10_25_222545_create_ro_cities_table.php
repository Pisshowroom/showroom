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
        Schema::create('ro_cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ro_province_id')->nullable()->constrained('ro_provinces');
            $table->string('city_name');
            $table->string('postal_code');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ro_cities');
    }
};
