<?php

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
        public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250)->default('Lorem Ipsum')->nullable(false);
            $table->string('photo', 250)->default('background_post.png')->nullable(false);
            $table->text('content')->nullable(false);
            $table->integer('author')->nullable(false);
            $table->integer('draft')->default(1)->nullable(false);
            $table->boolean('visible')->nullable(false);
            $table->timestamps();
        });
    }
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
