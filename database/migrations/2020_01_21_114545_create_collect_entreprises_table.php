<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collect_entreprises', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('fournisseur_id');
            $table->foreign('fournisseur_id')
            ->references('id')
            ->on('fournisseurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');  
            $table->date('date_reception');
            $table->bigInteger('quantite');
            $table->bigInteger('ppcopo')->nullable();
            $table->bigInteger('pphomo')->nullable();
            $table->bigInteger('pet')->nullable();
            $table->bigInteger('pehd')->nullable();
            $table->bigInteger('dechet')->nullable();

            $table->bigInteger('prix');
            $table->bigInteger('montant');
            $table->BigInteger('avance')->nullable();
            $table->BigInteger('credit')->nullable();
            $table->BigInteger('reglement_definitif')->nullable();
            $table->string('commentaire')->nullable();

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
        Schema::dropIfExists('collect_entreprises');
    }
}
