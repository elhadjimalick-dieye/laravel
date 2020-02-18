<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class CollectEntreprise extends Model
{
    use SoftDeletes, Notifiable;

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fournisseur_id',
        'pphomo',
        'prixpphomo',
        'ppcopo',
        'prixppcopo',
        'dechet',
        'pet',
        'pehd',
        'date_collecte',
        'reglement_definitif',
        'commentaire',
        'numerobons',
        'totaltri',
        'petbouteille',
        'petbouteilleprix',
        'petpreform',
        'petpreformprix',
        'pehdcasier',
        'pehdcasierprix',
        'pehdsoufflage',
        'pehdsoufflageprix',
        
    ];


    public function fournisseurs()
    {
        return $this->belongsTo('App\Fournisseur','fournisseur_id');
    }

}
