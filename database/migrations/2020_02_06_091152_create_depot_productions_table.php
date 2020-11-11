<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepotProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depot_productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vracinitiale')->nullable();
            $table->bigInteger('vracEntrant')->nullable();
            $table->bigInteger('vracSortant')->nullable();
            $table->bigInteger('vrac')->nullable();

            $table->bigInteger('pphomoinitiale')->nullable();
            $table->bigInteger('pphomoEntrantpro')->nullable();
            $table->bigInteger('pphomoSortantepro')->nullable();
            $table->bigInteger('pphomo')->nullable();

            $table->bigInteger('ppcopoinitiale')->nullable();
            $table->bigInteger('ppcopoEntrantpro')->nullable();
            $table->bigInteger('ppcopoSortantepro')->nullable();
            $table->bigInteger('ppcopo')->nullable();
            $table->bigInteger('pp')->nullable();


            $table->bigInteger('petbouteilleinitiale')->nullable();
            $table->bigInteger('petbouteilleEntrantpro')->nullable();
            $table->bigInteger('petbouteilleSortantepro')->nullable();
            $table->bigInteger('petbouteille')->nullable();


            $table->bigInteger('petpreforminitiale')->nullable();
            $table->bigInteger('petpreformEntrantpro')->nullable();
            $table->bigInteger('petpreformSortantepro')->nullable();
            $table->bigInteger('petpreform')->nullable();

            $table->bigInteger('pet')->nullable();


            $table->bigInteger('pehdcasierinitiale')->nullable();
            $table->bigInteger('pehdcasierEntrantpro')->nullable();
            $table->bigInteger('pehdcasierSortantepro')->nullable();
            $table->bigInteger('pehdcasier')->nullable();


            $table->bigInteger('pehdsoufflageinitiale')->nullable();
            $table->bigInteger('pehdsoufflageEntrantpro')->nullable();
            $table->bigInteger('pehdsoufflageSortantepro')->nullable();
            $table->bigInteger('pehdsoufflage')->nullable();
            $table->bigInteger('pehd')->nullable();


            $table->bigInteger('dechet')->nullable();
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
        Schema::dropIfExists('depot_productions');
    }
}
