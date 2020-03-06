<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Lavage extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
    'lavage',
    'ppcopolav',
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

    'pphomolav',
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

    'petpreformlav',
    'petpreformbleu',
    'petpreformblanc',

    'petbouteillelav',
    'petbouteillebleu',
    'petbouteilleblanc',

    'pehdcasierlav',
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

    'pehdsouflagelav',
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
    'effectiflav',
    'dechelavage',
    'date'

];

}
