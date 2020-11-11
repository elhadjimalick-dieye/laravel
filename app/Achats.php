<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class Achats extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [

        'client',
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

        'ppcopoprix',
     

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

        'pphomoprix',
       

        'petpreformsac',
        'petpreformsacbleu',
        'petpreformsacblanc',

        'petpreformprix',

        'petbouteillesac',
        'petbouteillebleusac',
        'petbouteilleblancsac',

        'petbouteilleprix',
       

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

        'pehdcasierprix',
     


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

        'pehdsouflageprix',
    
        'totale',
        'somme',
        'montant',


        'date'
];



public function clients()
{
    return $this->belongsTo('App\Clients','client');
}

}
