<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class Sechage extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
    'sechage',
    'ppcoposec',
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

    'pphomosec',
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

    'petpreformsec',
    'petprefombleu',
    'petprefomblanc',

    'petbouteillesec',
    'petbouteillebleu',
    'petbouteilleblanc',

    'pehdcasiersec',
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

    'pehdsouflagesec',
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
    'effectifsec',
    'dechesechage',
    'date'

];

}
