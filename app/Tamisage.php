<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Tamisage extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
    'tamisage',
    'ppcopotami',
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

    'pphomotami',
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

    'petpreformtami',
    'petpreformbleu',
    'petpreformblanc',

    'petbouteilletami',
    'petbouteillebleu',
    'petbouteilleblanc',

    'pehdcasiertami',
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


    'pehdsouflagetami',
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
    'effectiftami',

    'dechetamisage',
    'date'

];

}
