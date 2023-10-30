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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('ro_province_id')->nullable()->constrained('ro_provinces');
            $table->foreignId('ro_city_id')->nullable()->constrained('ro_cities');
            $table->foreignId('ro_subdistrict_id')->nullable()->constrained('ro_subdistricts');
            $table->string('street')->nullable();
            $table->boolean('main')->default(false);
            $table->string('place_name')->nullable();
            $table->string('person_name')->nullable();
            $table->bigInteger('phone_number')->nullable();
            $table->string('village')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->text('address_text')->nullable();
            $table->text('address_description')->nullable();
            $table->double('lat')->nullable();
            $table->double('long')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
