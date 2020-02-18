<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Triage extends Model
{
    use SoftDeletes, Notifiable;

    protected $fillable = [
    'vracinitialetr',
    'vracEntranttr',
    'vracSortanttr',
    'vractr',
    'pphomoinitialetr',
    'pphomoEntranttr',
    'pphomoSortantetr',
    'pphomotr',
    'ppcopoinitialetr',
    'ppcopoEntranttr',
    'ppcopoSortantetr',
    'ppcopotr',
    'pptr',
    'petbouteilleinitialetr',
    'petbouteilleEntranttr',
    'petbouteilleSortantetr',
    'petbouteilletr',
    'petpreforminitialetr',
    'petpreformEntranttr',
    'petpreformSortantetr',
    'petpreformtr',
    'pettr',
    'pehdcasierinitialetr',
    'pehdcasierEntranttr',
    'pehdcasierSortantetr',
    'pehdcasiertr',
    'pehdsoufflageinitialetr',
    'pehdsoufflageEntranttr',
    'pehdsoufflageSortantetr',
    'pehdsoufflagetr',
    'pehdtr',
    'dechettr',
    'date'
    ];

}
