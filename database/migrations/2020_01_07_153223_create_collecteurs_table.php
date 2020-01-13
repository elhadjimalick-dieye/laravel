<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollecteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collecteurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('region');
            $table->string('departement');
            $table->string('ville');
            $table->string('quartier');
            $table->string('telephone');

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
        Schema::dropIfExists('collecteurs');
    }
}
