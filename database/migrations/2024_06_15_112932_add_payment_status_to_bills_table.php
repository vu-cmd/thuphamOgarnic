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
         Schema::table('bills', function (Blueprint $table) {
            $table->boolean('payment_status')->default(false); // Thêm cột payment_status với giá trị mặc định là false
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->dropColumn('payment_status'); // Nếu cần rollback, sẽ xóa cột payment_status
        });
    }
};
