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

    'pettami',
    'petbleu',
    'petblanc',

    'pehdtami',
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
    'effectiftami',

    'dechetamisage',
    'date'

];

}
