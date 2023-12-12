<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id('idEmployer');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('idUser')->on('users')->onDelete('cascade');
            $table->string('companyName');
            $table->string('city')->nullable();
            $table->integer('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('industry')->nullable();
            $table->integer('employeeCount')->nullable();
            $table->string('logo')->nullable();
            $table->string('coverPicture')->nullable();
            $table->text('bio')->nullable();
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
        Schema::dropIfExists('employers');
    }
}