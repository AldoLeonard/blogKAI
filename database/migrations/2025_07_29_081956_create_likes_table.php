<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('blog_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            // supaya user tidak bisa like postingan yang sama lebih dari 1x
            $table-> unique(['user_id', 'blog_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
