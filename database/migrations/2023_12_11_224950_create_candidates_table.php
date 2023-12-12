<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id('idCandidate');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('idUser')->on('users')->onDelete('cascade');
            $table->json('skills')->nullable();
            $table->json('workExperience')->nullable();
            $table->json('education')->nullable();
            $table->string('curriculumVitae')->nullable();
            $table->string('backgroundColor')->nullable();
            $table->string('textColor')->nullable();
            $table->string('fontFamily')->nullable();
            $table->string('profilePicture')->nullable();
            $table->string('coverPicture')->nullable();
            $table->string('coverLetter')->nullable();
            $table->text('jobPreferences')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}