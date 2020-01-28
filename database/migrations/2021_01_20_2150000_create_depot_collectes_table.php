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


            $table->bigInteger('dechet')->nullable();
            $table->unsignedBigInteger('collecteRecuplasts')->nullable();
            $table->foreign('collecteRecuplasts')
            ->references('id')
            ->on('collecte_recuplasts')
            ->onDelete('cascade')
            ->onUpdate('cascade');   
            
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
        Schema::dropIfExists('depot_collectes');
    }
}
