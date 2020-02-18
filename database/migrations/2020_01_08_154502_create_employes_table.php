<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('matricule');
            $table->date('date_de_naissance');	
            //id service
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
            ->references('id')
            ->on('services')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            //a refaire
            //$table->string('categorie');
            //$table->string('atelier');
            $table->string('situation_mat');
            $table->date('date_dentre');
            $table->date('date_sorti');	
            $table->double('nombre_de_part');
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
        Schema::dropIfExists('employes');
    }
}
