<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sacs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sac');

            $table->bigInteger('ppcopo')->nullable();
            $table->bigInteger('ppcopobleu')->nullable();
            $table->bigInteger('ppcopoblanc')->nullable();
            $table->bigInteger('ppcopojaune')->nullable();
            $table->bigInteger('ppcopovert')->nullable();
            $table->bigInteger('ppcopomauve')->nullable();
            $table->bigInteger('ppcoporouge')->nullable();
            $table->bigInteger('ppcopojadida')->nullable();
            $table->bigInteger('ppcopomaron')->nullable();
            $table->bigInteger('ppcoponoire')->nullable();
            $table->bigInteger('ppcopomulti')->nullable();

            $table->bigInteger('ppcoporestant')->nullable();
            $table->bigInteger('ppcopobleurestant')->nullable();
            $table->bigInteger('ppcopoblancrestant')->nullable();
            $table->bigInteger('ppcopojaunerestant')->nullable();
            $table->bigInteger('ppcopovertrestant')->nullable();
            $table->bigInteger('ppcopomauverestant')->nullable();
            $table->bigInteger('ppcoporougerestant')->nullable();
            $table->bigInteger('ppcopojadidarestant')->nullable();
            $table->bigInteger('ppcopomaronrestant')->nullable();
            $table->bigInteger('ppcoponoirerestant')->nullable();
            $table->bigInteger('ppcopomultirestant')->nullable();



            $table->bigInteger('pphomo')->nullable();
            $table->bigInteger('pphomobleu')->nullable();
            $table->bigInteger('pphomoblanc')->nullable();
            $table->bigInteger('pphomojaune')->nullable();
            $table->bigInteger('pphomovert')->nullable();
            $table->bigInteger('pphomomauve')->nullable();
            $table->bigInteger('pphomorouge')->nullable();
            $table->bigInteger('pphomojadida')->nullable();
            $table->bigInteger('pphomomaron')->nullable();
            $table->bigInteger('pphomonoire')->nullable();
            $table->bigInteger('pphomomulti')->nullable();


            $table->bigInteger('pphomorestant')->nullable();
            $table->bigInteger('pphomobleurestant')->nullable();
            $table->bigInteger('pphomoblancrestant')->nullable();
            $table->bigInteger('pphomojaunerestant')->nullable();
            $table->bigInteger('pphomovertrestant')->nullable();
            $table->bigInteger('pphomomauverestant')->nullable();
            $table->bigInteger('pphomorougerestant')->nullable();
            $table->bigInteger('pphomojadidarestant')->nullable();
            $table->bigInteger('pphomomaronrestant')->nullable();
            $table->bigInteger('pphomonoirerestant')->nullable();
            $table->bigInteger('pphomomultirestant')->nullable();

         


            $table->bigInteger('pet')->nullable();
            $table->bigInteger('petpreform')->nullable();
            $table->bigInteger('petpreformbleu')->nullable();
            $table->bigInteger('petpreformblanc')->nullable();


            $table->bigInteger('petrestant')->nullable();
            $table->bigInteger('petpreformrestant')->nullable();
            $table->bigInteger('petpreformbleurestant')->nullable();
            $table->bigInteger('petpreformblancrestant')->nullable();



            $table->bigInteger('petbouteille')->nullable();
            $table->bigInteger('petbouteillebleu')->nullable();
            $table->bigInteger('petbouteilleblanc')->nullable();

            $table->bigInteger('petbouteillerestant')->nullable();
            $table->bigInteger('petbouteillebleurestant')->nullable();
            $table->bigInteger('petbouteilleblancrestant')->nullable();


            $table->bigInteger('pehdcasier')->nullable();

            $table->bigInteger('pehdcasierbleu')->nullable();
            $table->bigInteger('pehdcasierblanc')->nullable();
            $table->bigInteger('pehdcasierjaune')->nullable();
            $table->bigInteger('pehdcasiervert')->nullable();
            $table->bigInteger('pehdcasierneutre')->nullable();
            $table->bigInteger('pehdcasierrouge')->nullable();
            $table->bigInteger('pehdcasierjadida')->nullable();
            $table->bigInteger('pehdcasiermaron')->nullable();
            $table->bigInteger('pehdcasiernoire')->nullable();
            $table->bigInteger('pehdcasiermulti')->nullable();

            $table->bigInteger('pehdcasierrestant')->nullable();

            $table->bigInteger('pehdcasierbleurestant')->nullable();
            $table->bigInteger('pehdcasierblancrestant')->nullable();
            $table->bigInteger('pehdcasierjaunerestant')->nullable();
            $table->bigInteger('pehdcasiervertrestant')->nullable();
            $table->bigInteger('pehdcasierneutrerestant')->nullable();
            $table->bigInteger('pehdcasierrougerestant')->nullable();
            $table->bigInteger('pehdcasierjadidarestant')->nullable();
            $table->bigInteger('pehdcasiermaronrestant')->nullable();
            $table->bigInteger('pehdcasiernoirerestant')->nullable();
            $table->bigInteger('pehdcasiermultirestant')->nullable();


            $table->bigInteger('pehdsouflage')->nullable();
            $table->bigInteger('pehdsouflagebleu')->nullable();
            $table->bigInteger('pehdsouflageblanc')->nullable();
            $table->bigInteger('pehdsouflagejaune')->nullable();
            $table->bigInteger('pehdsouflagevert')->nullable();
            $table->bigInteger('pehdsouflageneutre')->nullable();
            $table->bigInteger('pehdsouflagerouge')->nullable();
            $table->bigInteger('pehdsouflagejadida')->nullable();
            $table->bigInteger('pehdsouflagemaron')->nullable();
            $table->bigInteger('pehdsouflagenoire')->nullable();
            $table->bigInteger('pehdsouflagemulti')->nullable();


            $table->bigInteger('pehdsouflagerestant')->nullable();

            $table->bigInteger('pehdsouflagebleurestant')->nullable();
            $table->bigInteger('pehdsouflageblancrestant')->nullable();
            $table->bigInteger('pehdsouflagejaunerestant')->nullable();
            $table->bigInteger('pehdsouflagevertrestant')->nullable();
            $table->bigInteger('pehdsouflageneutrerestant')->nullable();
            $table->bigInteger('pehdsouflagerougerestant')->nullable();
            $table->bigInteger('pehdsouflagejadidarestant')->nullable();
            $table->bigInteger('pehdsouflagemaronrestant')->nullable();
            $table->bigInteger('pehdsouflagenoirerestant')->nullable();
            $table->bigInteger('pehdsouflagemultirestant')->nullable();


            $table->bigInteger('totale')->nullable();
            $table->bigInteger('effectifsac')->nullable();

            $table->bigInteger('dechesac')->nullable();
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
