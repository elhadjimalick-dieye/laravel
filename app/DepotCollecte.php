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
        'pehdSortante','ppSortante','petSortante','pehdSortante','ppcopoSortante','pphomoSortante','total','ppcopo','pphomo','pet','pp','pehd', 'depot','dechet','quantiteEntrante','quantiteSortante','quantiteinitiale','date'

    ];
   

    public function collectes()
    {
        return $this->belongsTo('App\CollecteRecuplasts','collecteRecuplasts');
    }
}
