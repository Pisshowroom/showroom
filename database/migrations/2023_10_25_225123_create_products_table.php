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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('products');
            $table->foreignId('seller_id')->nullable()->constrained('users');
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('image')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->integer('price')->default(0);
            $table->integer('stock')->default(0);
            $table->double('discount')->nullable()->comment('Note for percentage discount');
            $table->string('unit')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
