<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brute extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'collecteur_id','quantite','prix_unitaire','montant','commentaire','lieu'
    ];



    
    public function collecteurs()
    {
        return $this->belongsTo('App\Collecteur','collecteur_id');
    }
}
