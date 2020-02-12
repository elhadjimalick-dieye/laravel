<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepotCollecte extends Model
{


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantiteinitiale',
        'quantiteEntrante',
        'quantiteSortante',
        'depot',   

        'pphomo',
        'pphomoSortante',
        'ppcopo',
        'ppcopoSortante',

        'petbouteille',
        'petbouteilleSortante',
        'petpreform',
        'petpreformSortante',

        'pehdcasier',
        'pehdcasierSortante',
        'pehdsoufflage',
        'pehdsoufflageSortante',
        
        'total',
        'dechet',
        'date'
      
    ];
   

    public function collectes()
    {
        return $this->belongsTo('App\CollecteRecuplasts','collecteRecuplasts');
    }
}
