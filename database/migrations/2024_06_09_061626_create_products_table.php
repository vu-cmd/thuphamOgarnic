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
    $table->bigIncrements('id_product');
    $table->unsignedBigInteger('TypeProduct_id');
    $table->string('image');
    $table->string('name_product', 300);
    $table->decimal('price', 15, 3);
    $table->text('description'); // Thay đổi từ string thành text để không giới hạn số từ
    $table->foreign('TypeProduct_id')->references('id_type')->on('type_products')->onUpdate('cascade')->onDelete('cascade');
    $table->integer('quantity'); // Thêm cột số lượng
    $table->boolean('status'); // Thêm cột trạng thái
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
