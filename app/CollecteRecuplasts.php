<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollecteRecuplasts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fournisseur','date_reception','quantite', 'avance','regelement_definitif','commentaire','prix','montant','numerobon'
    ];


    public function fournisseurs()
    {
        return $this->belongsTo('App\Fournisseur','fournisseur');
    }
    

    public function collecterecuplast()
    {
        return $this->belongsTo('App\DepotCollecte');
    }
}
