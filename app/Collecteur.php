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
        'prenom','nom','direction','region','departement','ville','quartier','telephone'
    ];


    
    public function collect()
    {
        return $this->hasMany('App\Collecte');
    }
}
