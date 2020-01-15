<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collecte extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'collecteur_id','quantite','prix_unitaire','pp_homo','pp_copo','pet','pehd','montant','commentaire','lieu','dechet'
    ];



    
    public function collecteurs()
    {
        return $this->belongsTo('App\Collecteur');
    }
    public function brutes()
    {
        return $this->belongsTo('App\Brute');
    }
}
