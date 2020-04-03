<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');   
            $table->string('nomComplet');
            $table->string('contact');
            $table->string('adresse');
            $table->string('matricule');
            $table->string('creance');
            $table->bigInteger('restant_du')->nullable();
            $table->string('quantitetotale');
            $table->bigInteger('totaleachete')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fournisseurs');
    }
}
