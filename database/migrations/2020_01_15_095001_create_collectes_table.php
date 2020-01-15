<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectes', function (Blueprint $table) {
            $table->bigIncrements('id');
             //id service
             $table->unsignedBigInteger('collecteur_id');
             $table->foreign('collecteur_id')
             ->references('id')
             ->on('collecteurs')
             ->onDelete('cascade')
             ->onUpdate('cascade'); 
             $table->string('lieu');

            $table->integer('quantite');
            $table->integer('pp_copo');
            $table->integer('pp_homo');
            $table->integer('pehd');
            $table->integer('dechet');
            $table->integer('pet');
            $table->integer('prix_unitaire');
            $table->string('commentaire');
            $table->bigInteger('montant');
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
        Schema::dropIfExists('collectes');
    }
}
