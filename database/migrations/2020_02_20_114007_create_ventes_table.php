<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nombredesac');

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

            $table->bigInteger('ppcopobleuprix')->nullable();
            $table->bigInteger('ppcopoblancprix')->nullable();
            $table->bigInteger('ppcopojauneprix')->nullable();
            $table->bigInteger('ppcopovertprix')->nullable();
            $table->bigInteger('ppcopomauveprix')->nullable();
            $table->bigInteger('ppcoporougeprix')->nullable();
            $table->bigInteger('ppcopojadidaprix')->nullable();
            $table->bigInteger('ppcopomaronprix')->nullable();
            $table->bigInteger('ppcoponoireprix')->nullable();
            $table->bigInteger('ppcopomultiprix')->nullable();

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

            $table->bigInteger('pphomobleuprix')->nullable();
            $table->bigInteger('pphomoblancprix')->nullable();
            $table->bigInteger('pphomojauneprix')->nullable();
            $table->bigInteger('pphomovertprix')->nullable();
            $table->bigInteger('pphomomauveprix')->nullable();
            $table->bigInteger('pphomorougeprix')->nullable();
            $table->bigInteger('pphomojadidaprix')->nullable();
            $table->bigInteger('pphomomaronprix')->nullable();
            $table->bigInteger('pphomonoireprix')->nullable();
            $table->bigInteger('pphomomultiprix')->nullable();


            $table->bigInteger('pet')->nullable();
            $table->bigInteger('petpreform')->nullable();
            $table->bigInteger('petpreformbleu')->nullable();
            $table->bigInteger('petpreformblanc')->nullable();

            $table->bigInteger('petsac')->nullable();
            $table->bigInteger('petpreformsac')->nullable();
            $table->bigInteger('petpreformsacbleu')->nullable();
            $table->bigInteger('petpreformsacblanc')->nullable();

            $table->bigInteger('petpreformbleuprix')->nullable();
            $table->bigInteger('petpreformblancprix')->nullable();


            $table->bigInteger('petbouteille')->nullable();
            $table->bigInteger('petbouteillebleu')->nullable();
            $table->bigInteger('petbouteilleblanc')->nullable();

            $table->bigInteger('petbouteillesac')->nullable();
            $table->bigInteger('petbouteillebleusac')->nullable();
            $table->bigInteger('petbouteilleblancsac')->nullable();

            $table->bigInteger('petbouteillebleuprix')->nullable();
            $table->bigInteger('petbouteilleblancprix')->nullable();


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


            $table->bigInteger('pehdcasierbleuprix')->nullable();
            $table->bigInteger('pehdcasierblancprix')->nullable();
            $table->bigInteger('pehdcasierjauneprix')->nullable();
            $table->bigInteger('pehdcasiervertprix')->nullable();
            $table->bigInteger('pehdcasierneutreprix')->nullable();
            $table->bigInteger('pehdcasierrougeprix')->nullable();
            $table->bigInteger('pehdcasierjadidaprix')->nullable();
            $table->bigInteger('pehdcasiermaronprix')->nullable();
            $table->bigInteger('pehdcasiernoireprix')->nullable();
            $table->bigInteger('pehdcasiermultiprix')->nullable();


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

            $table->bigInteger('pehdsouflagebleuprix')->nullable();
            $table->bigInteger('pehdsouflageblancprix')->nullable();
            $table->bigInteger('pehdsouflagejauneprix')->nullable();
            $table->bigInteger('pehdsouflagevertprix')->nullable();
            $table->bigInteger('pehdsouflageneutreprix')->nullable();
            $table->bigInteger('pehdsouflagerougeprix')->nullable();
            $table->bigInteger('pehdsouflagejadidaprix')->nullable();
            $table->bigInteger('pehdsouflagemaronprix')->nullable();
            $table->bigInteger('pehdsouflagenoireprix')->nullable();
            $table->bigInteger('pehdsouflagemultiprix')->nullable();


            $table->bigInteger('totale')->nullable();

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
