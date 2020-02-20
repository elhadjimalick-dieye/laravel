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

        'pettri',
        'petbleu',
        'petblanc',

        'pehdtri',
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
        'effectiftri',
        
        'totale',
        'dechetriage',
        'date'
    ];

}
