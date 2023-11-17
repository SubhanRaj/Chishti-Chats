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
            // userID: primary key, int, max 3 digits
            $table->id('userID');
            // username: string, max 255 characters, unique
            $table->string('username', 255)->unique();
            // email: string, max 255 characters, unique
            $table->string('email', 255)->unique();
            // password: string, max 255 characters
            $table->string('password', 255);
            // remember token: string, max 100 characters
            $table->rememberToken();
            // profilePicture: string, max 255 characters
            $table->string('profilePicture', 255);
            // about: text
            $table->text('about');
            // socialLinks: string, max 255 characters
            $table->string('socialLinks', 255);
            // verified at: timestamp
            $table->timestamp('email_verified_at')->nullable();
            // created_at, updated_at
            $table->timestamps();
            // soft delete
            $table->softDeletes();
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
