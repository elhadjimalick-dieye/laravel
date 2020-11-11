<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Broyage extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
       'broyage',
       'ppcopobro',
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

       'pphomobro',
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

       'petpreformbro',
       'petpreformbleu',
       'petpreformblanc',


       'petbouteillebro',
       'petbouteillebleu',
       'petbouteilleblanc',

       'pehdcasierbro',
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

       'pehdsouflagebro',
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


       'totale',
       'effectifbro',
       'heuremachine',
       'dechebroyage',
       'date'
        

];

}
