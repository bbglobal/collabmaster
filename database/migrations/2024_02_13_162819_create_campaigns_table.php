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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string("platform")->nullable();
            $table->string("website")->nullable();
            $table->string("instagram_username")->nullable();
            $table->string("tiktok_username")->nullable();
            $table->string("youtube_username")->nullable();
            $table->string("twitter_username")->nullable();
            $table->string("product_summary")->nullable();
            $table->string("content_type_0")->nullable();
            $table->string("quantity_0")->nullable();
            $table->string("duration_0")->nullable();
            $table->string("duration_unit_0")->nullable();
            $table->string("requirement_description_0")->nullable();
            $table->string("quantity_1")->nullable();
            $table->string("duration_1")->nullable();
            $table->string("duration_unit_1")->nullable();
            $table->string("requirement_description_1")->nullable();
            $table->string("genderOption")->nullable();
            $table->string("genderOption_2")->nullable();
            $table->string("genderOption_3")->nullable();
            $table->string("genderOption_4")->nullable();
            $table->string("product_cost")->nullable();
            $table->string("genderOption_5")->nullable();
            $table->string("delivery_date")->nullable();
            $table->string("genderOption_6")->nullable();
            $table->string("mentions")->nullable();
            $table->string("img_files")->nullable();
            $table->string("img1")->nullable();
            $table->string("img2")->nullable();
            $table->string("img3")->nullable();
            $table->string("img4")->nullable();
            $table->string("content_1")->nullable();
            $table->string("content_2")->nullable();
            $table->string("content_3")->nullable();
            $table->string("content_4")->nullable();
            $table->string("files")->nullable();
            $table->string("file_list_objs")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")
                ->references("id")
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
