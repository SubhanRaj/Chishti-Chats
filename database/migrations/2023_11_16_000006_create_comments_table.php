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
        Schema::create('comments', function (Blueprint $table) {
            // commentID, primary key, int, max 10 digits
            $table->id();
            // userID, int, max 3 digits
            $table->integer('user_id');
            // postID, int, max 3 digits
            $table->integer('post_id');
            // content
            $table->text('content');
            // filePath, string, max 255 characters
            $table->string('filepath', 255);
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
        Schema::dropIfExists('comments');
    }
};
