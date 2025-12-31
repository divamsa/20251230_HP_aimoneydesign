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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // 'inquiry', 'download', 'consultation'
            $table->string('name'); // お名前
            $table->string('company_name'); // 会社名・組織名
            $table->string('email'); // メールアドレス
            $table->string('phone'); // 電話番号
            // 一般問い合わせ用
            $table->string('inquiry_type')->nullable(); // 問い合わせ種別
            $table->text('message')->nullable(); // 問い合わせ内容
            // 資料請求用
            $table->json('requested_materials')->nullable(); // 希望資料（複数選択可）
            // 無料相談申し込み用
            $table->datetime('preferred_datetime')->nullable(); // 希望日時
            $table->text('consultation_content')->nullable(); // 相談内容
            // 共通
            $table->boolean('privacy_agreed')->default(false); // 個人情報の取り扱い同意
            $table->string('status')->default('pending'); // 'pending', 'processing', 'completed'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
