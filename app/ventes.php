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

        'ppcopobleuprix',
        'ppcopoblancprix',
        'ppcopojauneprix',
        'ppcopovertprix',
        'ppcopomauveprix',
        'ppcoporougeprix',
        'ppcopojadidaprix',
        'ppcopomaronprix',
        'ppcoponoireprix',
        'ppcopomultiprix',

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

        'pphomobleuprix',
        'pphomoblancprix',
        'pphomojauneprix',
        'pphomovertprix',
        'pphomomauveprix',
        'pphomorougeprix',
        'pphomojadidaprix',
        'pphomomaronprix',
        'pphomonoireprix',
        'pphomomultiprix',


        'pet',
        'petpreform',
        'petpreformbleu',
        'petpreformblanc',

        'petsac',
        'petpreformsac',
        'petpreformsacbleu',
        'petpreformsacblanc',

        'petpreformbleuprix',
        'petpreformblancprix',


        'petbouteille',
        'petbouteillebleu',
        'petbouteilleblanc',

        'petbouteillesac',
        'petbouteillebleusac',
        'petbouteilleblancsac',

        'petbouteillebleuprix',
        'petbouteilleblancprix',


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


        'pehdcasierbleuprix',
        'pehdcasierblancprix',
        'pehdcasierjauneprix',
        'pehdcasiervertprix',
        'pehdcasierneutreprix',
        'pehdcasierrougeprix',
        'pehdcasierjadidaprix',
        'pehdcasiermaronprix',
        'pehdcasiernoireprix',
        'pehdcasiermultiprix',


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

        'pehdsouflagebleuprix',
        'pehdsouflageblancprix',
        'pehdsouflagejauneprix',
        'pehdsouflagevertprix',
        'pehdsouflageneutreprix',
        'pehdsouflagerougeprix',
        'pehdsouflagejadidaprix',
        'pehdsouflagemaronprix',
        'pehdsouflagenoireprix',
        'pehdsouflagemultiprix',

        'totale',
        'date'
];

}
