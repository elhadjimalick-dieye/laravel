<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollecterecuplastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collecte_recuplasts', function (Blueprint $table) {
            $table->bigIncrements('id');
            //id service
            $table->unsignedBigInteger('fournisseur');
            $table->foreign('fournisseur')
            ->references('id')
            ->on('fournisseurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');  
          
          $table->date('date_reception');
          $table->BigInteger('quantite');
          $table->integer('prix');
        // $table->BigInteger('avance')->nullable();
          $table->BigInteger('regelement_definitif')->nullable();
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
        Schema::dropIfExists('collecterecuplasts');
    }
}
