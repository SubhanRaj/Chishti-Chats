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
        Schema::create('posts', function (Blueprint $table) {
            // postID : primary key, int, max 10 digits
            $table->id('postID')->primary();
            // userID: foreign key, int, max 3 digits
            $table->foreignId('userID')->constrained('users');
            // categoryID: foreign key, int, max 10 digits
            $table->foreignId('categoryID')->constrained('categories');
            // title: string, max 255 characters
            $table->string('title', 255);
            // content: text
            $table->text('content');
            // filePath: string, max 255 characters
            $table->string('filePath', 255);
            // tags, csv
            $table->string('tags', 255);
            // created_at, updated_at
            $table->timestamps();
            // deleted_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
