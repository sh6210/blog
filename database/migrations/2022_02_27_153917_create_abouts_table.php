<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('name');
            $table->string('page_title')->nullable();
            $table->string('summary')->nullable();
            $table->string('image')->nullable();
            $table->string('content')->nullable();
            $table->string('story_title')->nullable();
            $table->text('story_content')->nullable();
            $table->string('education_title')->nullable();
            $table->string('education_content')->nullable();
            $table->string('research_title')->nullable();
            $table->string('research_content')->nullable();
            $table->string('experience_title')->nullable();
            $table->string('experience_content')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
