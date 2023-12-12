<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('idComment');
            $table->unsignedBigInteger('commentor_id')->nullable();
            $table->unsignedBigInteger('post_id')->nullable();
            $table->foreign('commentor_id')->references('idCandidate')->on('Candidates')->onDelete('cascade');
            $table->foreign('post_id')->references('idPost')->on('posts')->onDelete('cascade');
            $table->text('content');
            $table->integer('likes')->default(0);
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
        Schema::dropIfExists('comments');
    }
}