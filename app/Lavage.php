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

    'petlav',
    'petbleu',
    'petblanc',

    'pehdlav',
    'pehdbleu',
    'pehdblanc',
    'pehdjaune',
    'pehdvert',
    'pehdneutre',
    'pehdrouge',
    'pehdjadida',
    'pehdmaron',
    'pehdnoire',
    'pehdmulti',

    'totale',
    'effectiflav',

    'dechelavage',
    'date'

];

}
