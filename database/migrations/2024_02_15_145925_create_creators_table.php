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
        Schema::create('creators', function (Blueprint $table) {
            $table->id();
            $table->string("location")->nullable();
            $table->string("bio")->nullable();
            $table->text("description")->nullable();
            $table->string("genderOption")->nullable();
            $table->string("instagram_username")->nullable();
            $table->string("instagram_followers")->nullable();
            $table->string("tiktok_username")->nullable();
            $table->string("youtube_username")->nullable();
            $table->string("twitter_username")->nullable();
            $table->string("twitch_username")->nullable();
            $table->string("amazon_storefront")->nullable();
            $table->string("website")->nullable();
            $table->string("categories")->nullable();
            $table->string("platform")->nullable();
            $table->string("file_path")->nullable();
            $table->string("img_1")->nullable();
            $table->string("img_2")->nullable();
            $table->string("img_3")->nullable();
            $table->string("img_4")->nullable();
            $table->string("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creators');
    }
};
