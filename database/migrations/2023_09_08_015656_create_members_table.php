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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('account')->comment('會員帳號');
            $table->string('password')->comment('會員密碼');
            $table->string('verify_code')->nullable()->comment('會員確認驗證碼');
            $table->string('name')->nullable()->comment('會員姓名');
            $table->string('email')->nullable()->comment('會員信箱');
            $table->string('phone')->nullable()->comment('會員電話');
            $table->string('address')->nullable()->comment('會員地址');
            $table->string('remark')->nullable()->comment('會員備註');
            $table->integer('status')->default(0)->comment('會員狀態: 0: 未啟用, 1: 啟用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
