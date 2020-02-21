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

       'petbro',
       'petbleu',
       'petblanc',

       'pehdbro',
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
       'effectifbro',
       'heuremachine',
       'dechebroyage',
       'date'
        

];

}
