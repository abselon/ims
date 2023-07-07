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
            $table->foreignId('categories_id')->onDelete('cascade');
            $table->foreignId('subcategories_id')->onDelete('cascade');            
            $table->string('name');
            $table->string('description');
            $table->foreignId('manufacture_id')->onDelete('cascade');            
            $table->integer('quantity')->default(1);
            $table->float('wholesale_price')->default(1);
            $table->float('selling_price')->default(1);
            $table->date('last_sold_date')->default('2002-02-02');
            $table->date('expiry_date')->default('2002-02-02');
            $table->boolean('expiry_status')->default(1);
            $table->integer('restock_threshold')->default(1);
            $table->integer('discount')->default(1);
            $table->boolean('discount_type')->default(1);
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
