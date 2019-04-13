<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChauffeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chauffeur', function (Blueprint $table) {
            $table->bigIncrements('idChauffeur');
            $table->bigInteger('idTransport');
            $table->bigInteger('idCompte');
            $table->string('nomChauffeur');
            $table->string('numChauffeur');
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
        Schema::dropIfExists('chauffeur');
    }
}
