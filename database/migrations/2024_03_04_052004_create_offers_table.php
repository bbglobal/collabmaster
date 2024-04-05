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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_id');
            $table->foreign('creator_id')
                  ->references('id')
                  ->on('users');
                  $table->string('package_category');
                  $table->string('package_title');
                  $table->text('package_description');
                  $table->integer('package_price');
                  $table->string('website')->nullable();
                  $table->string('instagram_username')->nullable();
                  $table->string('tiktok_username')->nullable();
                  $table->string('youtube_username')->nullable();
                  $table->string('twitter_username')->nullable();
                  $table->unsignedBigInteger('brand_id');
                  $table->foreign('brand_id')
                        ->references('id')
                        ->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
