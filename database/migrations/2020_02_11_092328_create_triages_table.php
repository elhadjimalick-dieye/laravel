<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vracinitialetr')->nullable();
            $table->bigInteger('vracEntranttr')->nullable();
            $table->bigInteger('vracSortanttr')->nullable();
            $table->bigInteger('vractr')->nullable();

            $table->bigInteger('pphomoinitialetr')->nullable();
            $table->bigInteger('pphomoEntranttr')->nullable();
            $table->bigInteger('pphomoSortantetr')->nullable();
            $table->bigInteger('pphomotr')->nullable();

            $table->bigInteger('ppcopoinitialetr')->nullable();
            $table->bigInteger('ppcopoEntranttr')->nullable();
            $table->bigInteger('ppcopoSortantetr')->nullable();
            $table->bigInteger('ppcopotr')->nullable();
            $table->bigInteger('pptr')->nullable();

            $table->bigInteger('petbouteilleinitialetr')->nullable();
            $table->bigInteger('petbouteilleEntranttr')->nullable();
            $table->bigInteger('petbouteilleSortantetr')->nullable();
            $table->bigInteger('petbouteilletr')->nullable();

            $table->bigInteger('petpreforminitialetr')->nullable();
            $table->bigInteger('petpreformEntranttr')->nullable();
            $table->bigInteger('petpreformSortantetr')->nullable();
            $table->bigInteger('petpreformtr')->nullable();
            $table->bigInteger('pettr')->nullable();

            $table->bigInteger('pehdcasierinitialetr')->nullable();
            $table->bigInteger('pehdcasierEntranttr')->nullable();
            $table->bigInteger('pehdcasierSortantetr')->nullable();
            $table->bigInteger('pehdcasiertr')->nullable();

            $table->bigInteger('pehdsoufflageinitialetr')->nullable();
            $table->bigInteger('pehdsoufflageEntranttr')->nullable();
            $table->bigInteger('pehdsoufflageSortantetr')->nullable();
            $table->bigInteger('pehdsoufflagetr')->nullable();
            $table->bigInteger('pehdtr')->nullable();

            $table->bigInteger('dechettr')->nullable();
            $table->date('date');
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
        Schema::dropIfExists('triages');
    }
}
