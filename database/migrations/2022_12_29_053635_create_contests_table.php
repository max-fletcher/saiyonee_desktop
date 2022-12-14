<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->year('year');
            $table->string('medium');
            $table->string('known_duration');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('gdrive_image_link')->nullable();
            $table->string('video')->nullable();
            $table->string('gdrive_video_link')->nullable();
            $table->text('feedback')->nullable();
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
        Schema::dropIfExists('contests');
    }
}
