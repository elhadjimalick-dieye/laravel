<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class Ventes extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
        'nombredesac',

        'ppcopo',
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

        'ppcoposac',
        'ppcoposacbleu',
        'ppcoposacblanc',
        'ppcoposacjaune',
        'ppcoposacvert',
        'ppcoposacmauve',
        'ppcoposacrouge',
        'ppcoposacjadida',
        'ppcoposacmaron',
        'ppcoposacnoire',
        'ppcoposacmulti',

        'pphomo',
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

        'pphomosac',
        'pphomosacbleu',
        'pphomosacblanc',
        'pphomosacjaune',
        'pphomosacvert',
        'pphomosacmauve',
        'pphomosacrouge',
        'pphomosacjadida',
        'pphomosacmaron',
        'pphomosacnoire',
        'pphomosacmulti',

        'petpreform',
        'petpreformbleu',
        'petpreformblanc',

        'petpreformsac',
        'petpreformsacbleu',
        'petpreformsacblanc',

        'petbouteille',
        'petbouteillebleu',
        'petbouteilleblanc',

        'petbouteillesac',
        'petbouteillebleusac',
        'petbouteilleblancsac',


        'pehdcasier',
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


        'pehdcasiersac',
        'pehdcasiersacbleu',
        'pehdcasiersacblanc',
        'pehdcasiersacjaune',
        'pehdcasiersacvert',
        'pehdcasiersacneutre',
        'pehdcasiersacrouge',
        'pehdcasiersacjadida',
        'pehdcasiersacmaron',
        'pehdcasiersacnoire',
        'pehdcasiersacmulti',

        'pehdsouflage',
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


        'pehdsouflagesac',
        'pehdsouflagesacbleu',
        'pehdsouflagesacblanc',
        'pehdsouflagesacjaune',
        'pehdsouflagesacvert',
        'pehdsouflagesacneutre',
        'pehdsouflagesacrouge',
        'pehdsouflagesacjadida',
        'pehdsouflagesacmaron',
        'pehdsouflagesacnoire',
        'pehdsouflagesacmulti',

        'totale',
        'date'
];




}
