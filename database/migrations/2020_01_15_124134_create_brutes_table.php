<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brutes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('collecteur_id');
            $table->foreign('collecteur_id')
            ->references('id')
            ->on('collecteurs')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->string('lieu');
           $table->integer('quantite');
           $table->integer('prix_unitaire');
           $table->bigInteger('montant');
           $table->string('commentaire');
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
        Schema::dropIfExists('brutes');
    }
}
