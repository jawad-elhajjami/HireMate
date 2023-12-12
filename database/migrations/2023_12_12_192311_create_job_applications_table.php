<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id('idJobApplication');
            $table->unsignedBigInteger('candidate_id');
            $table->unsignedBigInteger('jobOffer_id');
            $table->timestamps();
            $table->foreign('candidate_id')->references('idCandidate')->on('Candidates')->onDelete('cascade');
            $table->foreign('jobOffer_id')->references('idJobOffer')->on('job_offers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
