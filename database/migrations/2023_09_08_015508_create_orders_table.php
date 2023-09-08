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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_id')->comment('會員ID');
            $table->string('order_no')->comment('訂單編號');
            $table->integer('total_price')->default(0)->comment('總金額');
            $table->integer('total_qty')->default(0)->comment('總數量');
            $table->integer('total_discount')->default(0)->comment('總折扣');
            $table->integer('tax')->default(0)->comment('稅額');
            $table->integer('net_price')->default(0)->comment('淨價');
            $table->integer('unit_price')->default(0)->comment('單價');
            $table->string('receiver_name')->nullable()->comment('收件人姓名');
            $table->string('receiver_phone')->nullable()->comment('收件人電話');
            $table->string('receiver_address')->nullable()->comment('收件人地址');
            $table->string('receiver_email')->nullable()->comment('收件人信箱');
            $table->string('receiver_time')->nullable()->comment('收件時間');
            $table->string('receiver_remark')->nullable()->comment('收件人備註');
            $table->integer('pay_type')->default(0)->comment('付款方式: 0: 沒有付款, 1: 信用卡, 2: 轉帳, 3: 貨到付款');
            $table->integer('pay_status')->default(0)->comment('付款狀態: 0: 沒有付款, 1: 已付款');
            $table->string('shipping_type')->nullable()->comment('運送方式');
            $table->string('shipping_status')->nullable()->comment('運送狀態');
            $table->string('shipping_fee')->nullable()->comment('運費');
            $table->string('shipping_remark')->nullable()->comment('運送備註');
            $table->string('shipping_no')->nullable()->comment('運送編號');
            $table->string('shipping_company')->nullable()->comment('運送公司');
            $table->string('shipping_time')->nullable()->comment('運送時間');
            $table->string('shipping_address')->nullable()->comment('運送地址');
            $table->string('shipping_phone')->nullable()->comment('運送電話');
            $table->string('shipping_name')->nullable()->comment('運送人姓名');
            $table->string('shipping_email')->nullable()->comment('運送人信箱');
            $table->integer('order_status')->default(0)->comment('訂單狀態: 0: 新訂單, 1: 已出貨, 2: 已完成, 3: 已取消');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
