<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Lavagehor extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
    'lavagehor',
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

    'petprefomlav',
    'petprefombleu',
    'petprefomblanc',

    'petbouteillelav',
    'petbouteillebleu',
    'petbouteilleblanc',


    'pehdcaiserlav',
    'pehdcaiserbleu',
    'pehdcaiserblanc',
    'pehdcaiserjaune',
    'pehdcaiservert',
    'pehdcaiserneutre',
    'pehdcaiserrouge',
    'pehdcaiserjadida',
    'pehdcaisermaron',
    'pehdcaisernoire',
    'pehdcaisermulti',

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
