<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepotCollectesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depot_collectes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('quantiteinitiale')->nullable();
            $table->bigInteger('quantiteEntrante')->nullable();
            $table->bigInteger('quantiteSortante')->nullable();
            $table->bigInteger('depot')->nullable();

            $table->bigInteger('pphomo')->nullable();
            $table->bigInteger('pphomoSortante')->nullable();
            $table->bigInteger('ppcopo')->nullable();
            $table->bigInteger('ppcopoSortante')->nullable();

            $table->bigInteger('petbouteille')->nullable();
            $table->bigInteger('petbouteilleSortante')->nullable();
            $table->bigInteger('petpreform')->nullable();
            $table->bigInteger('petpreformSortante')->nullable();

            $table->bigInteger('pehdcasier')->nullable();
            $table->bigInteger('pehdcasierSortante')->nullable();
            $table->bigInteger('pehdsoufflage')->nullable();
            $table->bigInteger('pehdsoufflageSortante')->nullable();

            $table->bigInteger('total');

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
        Schema::dropIfExists('depot_collectes');
    }
}
