<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('url');
            $table->text('page_name');
            $table->text('title');
            $table->text('keywords');
            $table->text('description');
            $table->text('og_url');
            $table->text('og_title');
            $table->text('og_image_url');
            $table->text('og_description');
            $table->text('page_topic')->nullable();
            $table->text('distribution')->nullable();
            $table->text('twitter_title')->nullable();
            $table->text('twitter_img_url')->nullable();
            $table->text('twitter_des')->nullable();
            $table->text('js_schema')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meta');
    }
};
