<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFournisseurRecuplastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseur_recuplast', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('fournisseur')->unsigned();
            $table->unsignedBigInteger('fournisseur');
            $table->foreign('fournisseur')
            ->references('id')
            ->on('fournisseurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');  
           // $table->integer('recuplast')->unsigned();
           $table->unsignedBigInteger('recuplast');
            $table->foreign('recuplast')
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
        Schema::dropIfExists('fournisseur_recuplast');
    }
}
