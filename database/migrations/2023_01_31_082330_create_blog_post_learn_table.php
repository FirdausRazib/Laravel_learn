<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;

class CreateBlogPostLearnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_learns', function (Blueprint $table) {
            $table->id();

            //start coding here
            $table->text('title'); //title of our blog post
            $table->text('body'); //body of our blog post
            $table->text('user_id'); //user_id of our blog post author

            //we stop coding here

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
        Schema::dropIfExists('blog_post_learn');
    }
}
