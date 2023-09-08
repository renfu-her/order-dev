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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->comment('訂單ID');
            $table->bigInteger('product_id')->comment('產品ID');
            $table->integer('price')->default(0)->comment('產品價格');
            $table->integer('qty')->default(0)->comment('產品數量');
            $table->integer('subtotal')->default(0)->comment('產品小計');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
