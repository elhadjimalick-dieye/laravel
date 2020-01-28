<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('solde');
           // $table->foreign('solde');
            $table->string('nomComplet');
            $table->string('contact');
            $table->string('region');
            $table->string('departement');
            $table->string('commune');
            $table->string('quartier');
            $table->string('numero')->nullable();
            $table->bigInteger('restant_du')->nullable();
            $table->bigInteger('avance')->nullable();
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
        Schema::dropIfExists('fournisseurs');
    }
}
