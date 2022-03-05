<?php

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('featured_image')->nullable();
            $table->boolean('is_at_home')->default(0);
            $table->boolean('is_at_slider')->default(0);
            $table->string('excerpt')->nullable();
            $table->text('content');
            $table->foreignIdFor(Author::class)->constrained('authors')->cascadeOnDelete();
            $table->boolean('allow_comment')->default(1);
            $table->foreignIdFor(Category::class)->constrained('categories')->cascadeOnDelete();
            $table->string('publish_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
