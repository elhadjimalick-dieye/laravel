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
            $table->unsignedBigInteger('collecteur_id')->nullable();
            $table->foreign('collecteur_id')
            ->references('id')
            ->on('collecteurs')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->string('prenom_collecteur');
            $table->string('nom_collecteur');
            $table->integer('quatite');
            $table->bigInteger('prix_unitaire');
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
