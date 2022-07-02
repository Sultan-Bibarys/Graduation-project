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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->timestamps();
            $table->string('post_title');
            $table->text('post_desctioption');
            $table->string('post_photo');
            $table->unsignedInteger('region_id');
            $table->unsignedInteger('categories_id');
            /*$table->unsignedBigInteger('user_id');


            $table->index('user_id', 'post_user_idx');
            

            $table->foreign('user_id', 'post_user_fk')->on('users')->references('user_id');
            */
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
