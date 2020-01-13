<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class collecte extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prenom_collecteur','nom_collecteur','quantite','prix_unitaire','montant','collecteur_id'
    ];


    public function collecteur()
    {
        return $this->belongsTo('App\Collecteur');
    }

}
