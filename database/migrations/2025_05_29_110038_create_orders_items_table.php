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
        Schema::create('orders_items', function (Blueprint $table) {
            $table->id();
            /* Dataos que vamos a guardar en la tabla */
            $table->integer('order_id');
            $table->integer('product_id');
            $table->string('product_name');
            $table->decimal('product_price', 8, 2);
            $table->integer('product_quantity');
            $table->string('product_image');
            $table->date('order_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_items');
    }
};
