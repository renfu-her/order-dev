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
            $table->string('product_no')->comment('產品編號');
            $table->string('category')->comment('產品類別');
            $table->integer('price')->default(0)->comment('產品價格');
            $table->integer('qty')->default(0)->comment('產品數量');
            $table->string('name')->comment('產品名稱');
            $table->string('remark')->nullable()->comment('產品備註');
            $table->longText('spec')->nullable()->comment('產品規格');
            $table->longText('features')->nullable()->comment('產品特色');
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
