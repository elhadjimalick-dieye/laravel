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
    'depot','dechet','quantiteEntrante','quantiteSortante','quantiteinitiale'

    ];
   

    public function collectes()
    {
        return $this->belongsTo('App\CollecteRecuplasts','collecteRecuplasts');
    }
}
