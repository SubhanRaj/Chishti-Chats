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
        Schema::create('categories', function (Blueprint $table) {
            // categoryID, primary key, int, max 10 digits
            $table->id();
            // categoryName, string, max 255 characters, unique
            $table->string('category_name', 255)->unique();
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
        Schema::dropIfExists('categories');
    }
};
