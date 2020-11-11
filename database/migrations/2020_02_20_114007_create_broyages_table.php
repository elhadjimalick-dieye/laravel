<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBroyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broyages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('broyage');

            $table->bigInteger('ppcopobro')->nullable();
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

            $table->bigInteger('pphomobro')->nullable();
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

            $table->bigInteger('petpreformbro')->nullable();
            $table->bigInteger('petpreformbleu')->nullable();
            $table->bigInteger('petpreformblanc')->nullable();

            $table->bigInteger('petbouteillebro')->nullable();
            $table->bigInteger('petbouteillebleu')->nullable();
            $table->bigInteger('petbouteilleblanc')->nullable();

            $table->bigInteger('pehdcasierbro')->nullable();
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

            $table->bigInteger('pehdsouflagebro')->nullable();
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

            $table->bigInteger('totale')->nullable();
            $table->bigInteger('effectifbro')->nullable();
            $table->bigInteger('heuremachine')->nullable();


            $table->bigInteger('dechebroyage')->nullable();
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
