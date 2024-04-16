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
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('package_id')->unsigned()->nullable();
            $table->integer('creator_id')->unsigned()->nullable();
            $table->string('full_name');
            $table->string('address');
            $table->text('description');
            $table->string('package_content_type');
            $table->string('price');
            $table->string('razorpay_payment_id')->nullable();
            $table->string('razorpay_order_id')->nullable();
            $table->string('razorpay_signature')->nullable();
            $table->enum('payment_method',['Cash On Delivery','Razorpay'])->default('Cash On Delivery');
            $table->string('payment_status')->nullable();
            $table->foreign('brand_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');
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
