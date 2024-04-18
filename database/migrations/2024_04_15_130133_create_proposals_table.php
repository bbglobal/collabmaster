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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string("proposal");
            $table->string("price");
            $table->string("duration");
            
            $table->unsignedBigInteger("campaign_id");
            $table->foreign("campaign_id")
                ->references("id")
                ->on('campaigns')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger("brand_id");
            $table->foreign("brand_id")
                ->references("id")
                ->on('users')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger("creator_id");
            $table->foreign("creator_id")
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
        Schema::dropIfExists('proposals');
    }
};
