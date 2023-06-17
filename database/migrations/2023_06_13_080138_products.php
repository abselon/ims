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
            $table->foreignId('category_id')->constrained();
            $table->string('name');
            $table->string('description');
            $table->string('manufacturer');
            $table->integer('quantity');
            $table->float('wholesale_price');
            $table->float('selling_price');
            $table->date('last_sold_date');
            $table->date('expiry_date');
            $table->boolean('expiry_status');
            $table->integer('restock_threshold');
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
