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
        'fournisseur_id','pphomo','ppcopo','dechet','pet','pehd','date_reception','quantite','reglement_definitif','commentaire','prix','montant'
    ];


    public function fournisseurs()
    {
        return $this->belongsTo('App\Fournisseur','fournisseur_id');
    }

}
