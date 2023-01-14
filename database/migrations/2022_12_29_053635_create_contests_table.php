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
            $table->string('name')->nullable();
            $table->year('year')->nullable();
            $table->string('medium')->nullable();
            $table->string('known_duration')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('gdrive_image_link')->nullable();
            $table->string('video')->nullable();
            $table->string('gdrive_video_link')->nullable();
            $table->text('feedback')->nullable();
            $table->string('contest_identifier_token')->nullable()
                    ->comment('Used in conjunction with dropzone for identifying chunk upload files.'); // Used in conjunction with dropzone for identifying chunk upload files.
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
