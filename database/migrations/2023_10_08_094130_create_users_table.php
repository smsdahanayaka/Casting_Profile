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
            $table->id();
            $table->string('profile_pic')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('home_town')->nullable();
            $table->string('height')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('shoe_size')->nullable();
            $table->string('pants_size')->nullable();
            $table->string('top_size')->nullable();
            $table->string('dress_size')->nullable();
            $table->text('action_experience')->nullable();
            $table->text('special_skills')->nullable();
            $table->text('ads_films_tv_shows')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('youtube')->nullable();
            $table->text('remark')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->default('user');
            $table->timestamps();
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
