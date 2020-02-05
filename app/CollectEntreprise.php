<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectEntreprise extends Model
{
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
        'prixpet',
        'pehd',
        'prixpehd',
        'date_collecte',
        'reglement_definitif',
        'commentaire',
        'numerobons',
        'totaltri'
        
    ];


    public function fournisseurs()
    {
        return $this->belongsTo('App\Fournisseur','fournisseur_id');
    }

}
