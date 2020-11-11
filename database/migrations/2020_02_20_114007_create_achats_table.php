<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client');
            $table->foreign('client')
            ->references('id')
            ->on('clients')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->bigInteger('ppcoposac')->nullable();
            $table->bigInteger('ppcoposacbleu')->nullable();
            $table->bigInteger('ppcoposacblanc')->nullable();
            $table->bigInteger('ppcoposacjaune')->nullable();
            $table->bigInteger('ppcoposacvert')->nullable();
            $table->bigInteger('ppcoposacmauve')->nullable();
            $table->bigInteger('ppcoposacrouge')->nullable();
            $table->bigInteger('ppcoposacjadida')->nullable();
            $table->bigInteger('ppcoposacmaron')->nullable();
            $table->bigInteger('ppcoposacnoire')->nullable();
            $table->bigInteger('ppcoposacmulti')->nullable();
            $table->bigInteger('ppcopoprix')->nullable();

            $table->bigInteger('pphomosac')->nullable();
            $table->bigInteger('pphomosacbleu')->nullable();
            $table->bigInteger('pphomosacblanc')->nullable();
            $table->bigInteger('pphomosacjaune')->nullable();
            $table->bigInteger('pphomosacvert')->nullable();
            $table->bigInteger('pphomosacmauve')->nullable();
            $table->bigInteger('pphomosacrouge')->nullable();
            $table->bigInteger('pphomosacjadida')->nullable();
            $table->bigInteger('pphomosacmaron')->nullable();
            $table->bigInteger('pphomosacnoire')->nullable();
            $table->bigInteger('pphomosacmulti')->nullable();
            $table->bigInteger('pphomoprix')->nullable();
           
            $table->bigInteger('petpreformsac')->nullable();
            $table->bigInteger('petpreformsacbleu')->nullable();
            $table->bigInteger('petpreformsacblanc')->nullable();

            $table->bigInteger('petpreformprix')->nullable();

            $table->bigInteger('petbouteillesac')->nullable();
            $table->bigInteger('petbouteillebleusac')->nullable();
            $table->bigInteger('petbouteilleblancsac')->nullable();

            $table->bigInteger('petbouteilleprix')->nullable();

            $table->bigInteger('pehdcasiersac')->nullable();
            $table->bigInteger('pehdcasiersacbleu')->nullable();
            $table->bigInteger('pehdcasiersacblanc')->nullable();
            $table->bigInteger('pehdcasiersacjaune')->nullable();
            $table->bigInteger('pehdcasiersacvert')->nullable();
            $table->bigInteger('pehdcasiersacneutre')->nullable();
            $table->bigInteger('pehdcasiersacrouge')->nullable();
            $table->bigInteger('pehdcasiersacjadida')->nullable();
            $table->bigInteger('pehdcasiersacmaron')->nullable();
            $table->bigInteger('pehdcasiersacnoire')->nullable();
            $table->bigInteger('pehdcasiersacmulti')->nullable();

            $table->bigInteger('pehdcasierprix')->nullable();


            $table->bigInteger('pehdsouflagesac')->nullable();
            $table->bigInteger('pehdsouflagesacbleu')->nullable();
            $table->bigInteger('pehdsouflagesacblanc')->nullable();
            $table->bigInteger('pehdsouflagesacjaune')->nullable();
            $table->bigInteger('pehdsouflagesacvert')->nullable();
            $table->bigInteger('pehdsouflagesacneutre')->nullable();
            $table->bigInteger('pehdsouflagesacrouge')->nullable();
            $table->bigInteger('pehdsouflagesacjadida')->nullable();
            $table->bigInteger('pehdsouflagesacmaron')->nullable();
            $table->bigInteger('pehdsouflagesacnoire')->nullable();
            $table->bigInteger('pehdsouflagesacmulti')->nullable();
            $table->bigInteger('pehdsouflageprix')->nullable();


            $table->bigInteger('totale')->nullable();
            $table->bigInteger('somme')->nullable();
            $table->bigInteger('montant')->nullable();
            $table->date('date');
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
        Schema::dropIfExists('lavages');
    }
}
