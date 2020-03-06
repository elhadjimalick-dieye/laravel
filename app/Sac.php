<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Sac extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
        'sac',
        'ppcopo',
        'ppcopobleu',
        'ppcopoblanc',
        'ppcopojaune',
        'ppcopovert',
        'ppcopomauve',
        'ppcoporouge',
        'ppcopojadida',
        'ppcopomaron',
        'ppcoponoire',
        'ppcopomulti',

        'pphomo',
        'pphomobleu',
        'pphomoblanc',
        'pphomojaune',
        'pphomovert',
        'pphomomauve',
        'pphomorouge',
        'pphomojadida',
        'pphomomaron',
        'pphomonoire',
        'pphomomulti',

        'pet',
        'petpreform',
        'petpreformbleu',
        'petpreformblanc',

        'petbouteille',
        'petbouteillebleu',
        'petbouteilleblanc',

        'pehdcasier',
        'pehdcasierbleu',
        'pehdcasierblanc',
        'pehdcasierjaune',
        'pehdcasiervert',
        'pehdcasierneutre',
        'pehdcasierrouge',
        'pehdcasierjadida',
        'pehdcasiermaron',
        'pehdcasiernoire',
        'pehdcasiermulti',


        'pehdsouflage',

        'pehdsouflagebleu',
        'pehdsouflageblanc',
        'pehdsouflagejaune',
        'pehdsouflagevert',
        'pehdsouflageneutre',
        'pehdsouflagerouge',
        'pehdsouflagejadida',
        'pehdsouflagemaron',
        'pehdsouflagenoire',
        'pehdsouflagemulti',


        'ppcoporestant',
        'ppcopobleurestant',
        'ppcopoblancrestant',
        'ppcopojaunerestant',
        'ppcopovertrestant',
        'ppcopomauverestant',
        'ppcoporougerestant',
        'ppcopojadidarestant',
        'ppcopomaronrestant',
        'ppcoponoirerestant',
        'ppcopomultirestant',

        'pphomorestant',
        'pphomobleurestant',
        'pphomoblancrestant',
        'pphomojaunerestant',
        'pphomovertrestant',
        'pphomomauverestant',
        'pphomorougerestant',
        'pphomojadidarestant',
        'pphomomaronrestant',
        'pphomonoirerestant',
        'pphomomultirestant',

        'petrestant',
        'petpreformrestant',
        'petpreformbleurestant',
        'petpreformblancrestant',

        'petbouteillerestant',
        'petbouteillebleurestant',
        'petbouteilleblancrestant',

        'pehdcasierrestant',
        'pehdcasierbleurestant',
        'pehdcasierblancrestant',
        'pehdcasierjaunerestant',
        'pehdcasiervertrestant',
        'pehdcasierneutrerestant',
        'pehdcasierrougerestant',
        'pehdcasierjadidarestant',
        'pehdcasiermaronrestant',
        'pehdcasiernoirerestant',
        'pehdcasiermultirestant',


        'pehdsouflagerestant',

        'pehdsouflagebleurestant',
        'pehdsouflageblancrestant',
        'pehdsouflagejaunerestant',
        'pehdsouflagevertrestant',
        'pehdsouflageneutrerestant',
        'pehdsouflagerougerestant',
        'pehdsouflagejadidarestant',
        'pehdsouflagemaronrestant',
        'pehdsouflagenoirerestant',
        'pehdsouflagemultirestant',



        'totale',
   

        'effectifsac',

        'dechesac',
       'date'
];

}
