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
            $table->unsignedBigInteger('type');
            $table->foreign('type')
            ->references('id')
            ->on('type_collecteurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');   
            $table->string('nomComplet');
            $table->string('contact')->nullable();
            $table->string('region')->nullable();
            $table->string('departement')->nullable();
            $table->string('commune')->nullable();
            $table->string('quartier')->nullable();
            $table->string('numero');
            $table->bigInteger('restant_du')->nullable();
            $table->bigInteger('avance')->nullable();
            $table->bigInteger('solde')->nullable();
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
        Schema::dropIfExists('fournisseurs');
    }
}
