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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->nullable();
            $table->string('full_name');
            $table->string('brand_name')->nullable();
            $table->string('email')->unique();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->default('assets/images/user.php');
            $table->string('phone_number')->unique()->nullable();
            $table->string('password');
            $table->boolean('is_verified')->default(0);
            $table->string('found_us')->nullable();
            $table->enum('role', ['admin', 'brand', 'creator']);
            $table->string('verificaton_token');
            $table->enum('status',['Active','DeActive'])->default('DeActive');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
