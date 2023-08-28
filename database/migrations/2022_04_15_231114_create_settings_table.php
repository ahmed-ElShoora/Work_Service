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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('logo');
            $table->string('google_link');
            $table->string('apple_link');
            $table->string('facebook_link');
            $table->string('twiter_link');
            $table->string('youtube_link');
            $table->string('email');
            $table->string('phone');
            $table->text('desc_ar');
            $table->text('desc_en');
            $table->text('howuse_ar');
            $table->text('howuse_en');
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
        Schema::dropIfExists('settings');
    }
};
