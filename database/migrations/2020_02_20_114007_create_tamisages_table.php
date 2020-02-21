<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamisagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamisages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tamisage');

            $table->bigInteger('ppcopotami')->nullable();
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

            $table->bigInteger('pphomotami')->nullable();
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

            $table->bigInteger('pettami')->nullable();
            $table->bigInteger('petbleu')->nullable();
            $table->bigInteger('petblanc')->nullable();

            $table->bigInteger('pehdtami')->nullable();
            $table->bigInteger('pehdbleu')->nullable();
            $table->bigInteger('pehdblanc')->nullable();
            $table->bigInteger('pehdjaune')->nullable();
            $table->bigInteger('pehdvert')->nullable();
            $table->bigInteger('pehdneutre')->nullable();
            $table->bigInteger('pehdrouge')->nullable();
            $table->bigInteger('pehdjadida')->nullable();
            $table->bigInteger('pehdmaron')->nullable();
            $table->bigInteger('pehdnoire')->nullable();
            $table->bigInteger('pehdmulti')->nullable();

            $table->bigInteger('totale')->nullable();
            $table->bigInteger('effectiftami')->nullable();

            $table->bigInteger('dechetamisage')->nullable();
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
        Schema::dropIfExists('tamisages');
    }
}
