<?php

use App\Models\Editor;
use App\Models\Writer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('name');
            $table->string('url')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('is_at_home')->default(0);
            $table->string('cover_image')->nullable();
            $table->foreignIdFor(Writer::class)->constrained('writers')->cascadeOnDelete();
            $table->foreignIdFor(Editor::class)->constrained('editors')->cascadeOnDelete();
            $table->string('published_at')->nullable();
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
        Schema::dropIfExists('books');
    }
}
