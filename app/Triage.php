<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Triage extends Model
{
    use SoftDeletes, Notifiable;

    protected $fillable = [
        'premierequantite',
        'ppcopotri',
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

        'pphomotri',
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

        'petpreformtri',
        'petpreformbleu',
        'petpreformblanc',

        'petbouteilletri',
        'petbouteillebleu',
        'petbouteilleblanc',

        'pehdcasiertri',
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

        'pehdsouflagetri',
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
        'effectiftri',
        
        'totale',
        'dechetriage',
        'date'
    ];

}
