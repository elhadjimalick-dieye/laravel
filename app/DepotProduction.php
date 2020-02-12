<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepotProduction extends Model
{


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'vracinitiale',
    'vracEntrant',
    'vracSortant',
    'vrac',

    'pphomoinitiale',
    'pphomoEntrantpro',
    'pphomoSortantepro',
    'pphomo',

    'ppcopoinitiale',
    'ppcopoEntrantpro',
    'ppcopoSortantepro',
    'ppcopo',
    'pp',

    'petbouteilleinitiale',
    'petbouteilleEntrantpro',
    'petbouteilleSortantepro',
    'petbouteille',

    'petpreforminitiale',
    'petpreformEntrantpro',
    'petpreformSortantepro',
    'petpreform',
    'pet',

    'pehdcasierinitiale',
    'pehdcasierEntrantpro',
    'pehdcasierSortantepro',
    'pehdcasier',

    'pehdsoufflageinitiale',
    'pehdsoufflageEntrantpro',
    'pehdsoufflageSortantepro',
    'pehdsoufflage',

    'pehd',
    'dechet',
    'date'
];

}
