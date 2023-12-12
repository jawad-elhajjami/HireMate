<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id('idJobOffer');
            $table->unsignedBigInteger('employer_id')->nullable();
            $table->foreign('employer_id')->references('idEmployer')->on('employers')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->double('salary')->nullable();
            $table->string('location')->nullable();
            $table->enum('contractType', ['Full-time', 'Part-time', 'Contract', 'Freelance']);
            $table->enum('remoteOrOnSite', ['Remote', 'On-site']);
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
        Schema::dropIfExists('job_offers');
    }
}