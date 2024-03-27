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
        Schema::create('services_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicesCategory_id');
            $table->string('title');
            $table->text('content');
            $table->string('post_scriptum')->nullable();
            $table->string('image');
            $table->string('price')->nullable();
            $table->timestamps();
            $table->foreign('servicesCategory_id')->references('id')->on('services_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_posts');
    }
};
