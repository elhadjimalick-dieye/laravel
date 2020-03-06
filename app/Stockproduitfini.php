<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Stockproduitfini extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
        'stockproduitfini',
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
        'pphomosac',


        'petpreformsac',
        'petpreformsacbleu',
        'petpreformsacblanc',

        'petbouteillesac',
        'petbouteillesacbleu',
        'petbouteillesacblanc',

       

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
        'pehdcasiersac',



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
        'pehdsouflagesac',

        'granule',
        'extrude',

        'effectifstock',
        'nombre',

       'date'
];

}
