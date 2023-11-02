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
        Schema::create('master_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_number', 30)->nullable();
            $table->string('name');
            $table->string('provider_name', 50);
            $table->string('image')->nullable();
            $table->string('type', 30);
            $table->boolean('recommend')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_accounts');
    }
};
