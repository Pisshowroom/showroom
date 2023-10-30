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
        Schema::create('ro_subdistricts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ro_city_id')->nullable()->constrained('ro_cities');
            $table->string('subdistrict_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ro_subdistricts');
    }
};
