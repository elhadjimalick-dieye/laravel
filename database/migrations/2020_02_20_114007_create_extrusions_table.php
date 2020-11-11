<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtrusionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrusions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('extrusion');

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
            $table->bigInteger('pehdsouflagesac')->nullable();




            $table->bigInteger('totale')->nullable();
            $table->bigInteger('effectifextru')->nullable();

            $table->bigInteger('decheextrusion')->nullable();
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
