<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_likes', function (Blueprint $table) {
            $table->id();
            
            /*$table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
            
            $table->index('post_id', 'publication_post_idx');
            $table->index('user_id', 'publication_user_idx');

            $table->foreign('post_id', 'publication_post_fk')->on('posts')->references('post_id');
            $table->foreign('user_id', 'publication_user_fk')->on('users')->references('user_id');
*/
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
        Schema::dropIfExists('publication_likes');
    }
}
