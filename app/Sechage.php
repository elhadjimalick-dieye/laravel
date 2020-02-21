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

    'petsec',
    'petbleu',
    'petblanc',

    'pehdsec',
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
    'effectifsec',
    'dechesechage',
    'date'

];

}
