<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collecteur extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomComplet','contact','region','departement','ville','quartier'
    ];


    
    public function collect()
    {
        return $this->hasMany('App\Collecte');
    }
}
