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
            /* Datos a guardar en la tabla */
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price', 3, 2);
            $table->decimal('sale_price', 3, 2);
            $table->integer('quantity');
            $table->string('category');
            $table->string('type');
            $table->string('image');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->timestamps();            
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
